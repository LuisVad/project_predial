<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        // Intentar autenticar al usuario
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Autenticación exitosa, redirigir a la página de inicio
            return redirect()->route('src.index'); // Cambia 'home' por la ruta deseada
        }

        // Si la autenticación falla, redirigir con un mensaje de error
        return back()->withErrors([
            'usuario' => 'Las credenciales son incorrectas.',
        ]);
    }

    public function showLoginForm()
    {
        return view('src.index'); // Cambia 'auth.login' por la ruta de tu vista de login
    }
}
