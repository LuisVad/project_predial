<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
            return redirect()->route('index'); // Cambia 'home' por la ruta deseada
        }

        // Si la autenticación falla, redirigir con un mensaje de error
        return back()->withErrors([
            'usuario' => 'Las credenciales son incorrectas.',
        ]);
    }

    public function showLoginForm()
    {
        return view('auth.login'); // Cambia 'auth.login' por la ruta de tu vista de login
    }

    public function showRegisterForm()
    {
        // Obtener todos los roles de la base de datos
        $roles = Role::all();
        return view('auth.register', compact('roles'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:6',
            'role_id' => 'required|exists:roles,id', // Validar que el rol exista
        ]);

        //dd($request);
        // Crear un nuevo usuario
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Encriptar la contraseña
            'role_id' => $request->role_id,
        ]);

        // Redirigir después de un registro exitoso
        return redirect()->route('login.form')->with('success', 'Registro exitoso. Ahora puedes iniciar sesión.');
    }

    public function logout()
    {
        Auth::logout(); // Cierra la sesión
        Session::flush(); // Limpia todos los datos de la sesión

        return redirect()->route('login.form')->with('success', 'Has cerrado sesión exitosamente.');
    }
}
