<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const PESERTA = 0;
    const NARASUMBER = 1;
    const ADMIN = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'nrp',
        'role',
        'password',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'role_name',
    ];

    public function getRoleNameAttribute()
    {
        return $this->role == self::PESERTA ? 'Peserta' : 
            ($this->role == self::NARASUMBER ? 'Narasumber' : 'Admin');
    }

    public function tokens()
    {
        return $this->hasMany(Token::class);
    }

    public function requests()
    {
        return $this->hasMany(Request::class);
    }

    public function group()
    {
        return $this->hasOneThrough(Group::class, GroupMember::class);
    }
}
