<?php

namespace App\Http\Requests\Auth;

use GSManager\Auth\Events\Lockout;
use GSManager\Foundation\Http\FormRequest;
use GSManager\Support\Facades\Auth;
use GSManager\Support\Facades\RateLimiter;
use GSManager\Support\Str;
use GSManager\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'login'    => ['required', 'string'],
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Выполняет аутентификацию пользователя.
     *
     * @throws ValidationException
     */
    public function authenticate(): void
    {
        $this->ensureIsNotRateLimited();

        $login = $this->string('login');
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (!Auth::attempt([$field => $login, 'password' => $this->string('password')], $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'login' => [
                    'message' => trans('auth.failed'),
                    'toast'   => true,
                    'type'    => 'error',
                ],
            ]);
        }

        RateLimiter::clear($this->throttleKey());
    }

    /**
     * Проверка лимита попыток входа.
     *
     * @throws ValidationException
     */
    public function ensureIsNotRateLimited(): void
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'login' => [
                'message' => trans('auth.throttle', [
                    'seconds' => $seconds,
                    'minutes' => ceil($seconds / 60),
                ]),
                'toast' => true,
                'type'  => 'warning',
            ],
        ]);
    }

    /**
     * Генерирует ключ для лимита попыток.
     */
    public function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->string('login')) . '|' . $this->ip());
    }
}
