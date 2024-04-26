<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validar datos del formulario
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Si la autenticación es exitosa, redireccionar a la página de inicio
            return redirect()->intended('/');
        } else {
            // Si la autenticación falla, redireccionar de nuevo al formulario de inicio de sesión con un mensaje de error
            return redirect()->back()->with('error', 'Credenciales incorrectas. Por favor, inténtalo de nuevo.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
