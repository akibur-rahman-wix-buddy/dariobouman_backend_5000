<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'handle',
        'avatar',
        'email',
        'password',
        'email_verified_at',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
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



    /**
     * Get the user's profile.
     *
     * This method establishes a one-to-one relationship between the User
     * model and the Profile model. It allows you to easily access the
     * profile associated with the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }


    public function getAvatarAttribute($url): string
    {
        return $url ? asset('storage/' . $url) : asset('assets/dev/image/avatar.jpg');
    }


    /**
     * Get the associated StockX model for this instance.
     *
     * This method establishes a one-to-one relationship with the StockX model,
     * allowing access to the related StockX record.
     *
     * @return HasOne
     */
    public function stockX(): HasOne
    {
        return $this->hasOne(StockX::class);
    }
}
