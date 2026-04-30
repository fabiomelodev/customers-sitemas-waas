<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/autologin/{token}', function ($token) {
    $user = User::query()->where('login_token', $token)->firstOrFail();

    // Loga o usuário na aplicação app.
    auth()->login($user);

    // Apaga o token para ele nunca mais ser usado
    $user->update(['login_token' => null]);

    // Manda para o Dashboard do Filament
    return redirect('/admin');
})->name('autologin');