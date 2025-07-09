<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use GSManager\Auth\Events\Registered;
use GSManager\Http\RedirectResponse;
use GSManager\Http\Request;
use GSManager\RouteAttributes\Attributes\Get;
use GSManager\RouteAttributes\Attributes\Middleware;
use GSManager\RouteAttributes\Attributes\Post;
use GSManager\Support\Facades\Auth;
use GSManager\Support\Facades\Hash;
use GSManager\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;
#[Middleware(['guest'])]
class RegisteredUserController extends Controller
{
    /**
     * Show the registration page.
     */
    #[Get('register', name: 'register')]
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \GSManager\Validation\ValidationException
     */
    #[Post('register')]
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'username' => 'required|string|max:50|alpha_dash|unique:'.User::class,
            'email' => 'required|string|lowercase|email|max:255|unique:'.User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return to_route('dashboard');
    }
}
