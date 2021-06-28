<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function login(Request $request) {
      $validate = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required']
      ]);

      $data = $request->all();
      $user = User::login($data['email'], $data['password']);

      if (!$user) {
        return view('login', ['user' => $user]);
      }
      return view('home');
    }

    public function store(Request $request) {
      $validate = $request->validate([
        'name' => ['required'],
        'email' => ['required', 'email'],
        'password1' => ['required'],
        'password2' => ['required'],
      ]);

      $data = $request->all();

      if ($data['password1'] != $data['password2']) {
        return view('reg', ['message' => 'Пароли не совпадают']);
      }

      $message = User::store($data['name'], $data['email'], $data['password1']);

      if (!$message) {
        return view('reg', ['message' => $message]);
      }
      return view('login', ['user' => true]);
    }

    public function logout() {
      User::logout();

      return view('home');
    }
}
