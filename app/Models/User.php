<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];


    protected $hidden = [
        'password'
    ];

    public $timestamps = false;

    public static function login($email, $pass) {
      $user = User::where('email', $email)->first();

      if (!$user || Hash::check($user->password, $pass)) {
        return false;
      }

      session(['user' => $user]);

      return $user;
    }

    public static function store($name, $email, $pass) {
      $user = User::create([
        'name' => $name,
        'email' => $email,
        'password' => Hash::make($pass)
      ]);

      if (!$user) {
        return false;
      }

      return $user;
    }

    public static function logout() {
      session(['user' => null]);
    }
}
