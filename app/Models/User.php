<?php

namespace App\Models;

// use GSManager\Contracts\Auth\MustVerifyEmail;
use GSManager\AuthenticationLog\AuthenticationLogable;
use GSManager\Database\Eloquent\Factories\HasFactory;
use GSManager\Database\Eloquent\SoftDeletes;
use GSManager\Foundation\Auth\User as Authenticatable;
use GSManager\Notifications\Notifiable;
use GSManager\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles, SoftDeletes, AuthenticationLogable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'lastname',
        'username',
        'email',
        'password',
        'balance',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function fullName(): string
    {
        return $this->name.' '.$this->lastname;
    }

}
