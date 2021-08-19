<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

   
    protected $guarded = [];

    public static $validation = [
        // 'name'     => 'required|string|min:5',
        // 'email'    => 'required|string|min:5',
        // 'phone'    => 'required|string|min:10',
        // 'address'  => 'required|string|min:1',
        // 'password' => 'required|string|min:6',
        // 'photo'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ];
      
      public static $register = [
        'name' => ['required', 'string', 'max:255'],
        'phone' => ['required', 'string', 'max:255'],
        'address' => ['required', 'string', 'max:255'],
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'photo'    => ['required','image','mimes:jpeg,png,jpg,gif,svg','max:2048'],
      ];
      
    public static $validationUpdate = [
        'name'     => 'string',
        'email'    => 'string',
        'phone'    => 'string',
        'address'  => 'string|min:6',
        'photo'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
