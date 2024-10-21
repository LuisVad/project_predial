<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showChangePasswordForm()
    {
        return view('utilerias.change_password');
    }

    public function changePassword(Request $request)
{
    $request->validate([
        'currentPassword' => 'required',
        'newPassword' => 'required|min:6|confirmed',
    ]);
    
    $user = Auth::user();

    //dd($user); 

    if (is_null($user)) {
        return back()->withErrors(['error' => 'Usuario no autenticado.']);
    }

    if (!Hash::check($request->currentPassword, $user->password)) {
        return back()->withErrors(['currentPassword' => 'La contraseña actual es incorrecta.']);
    }

    try {
        // Hash de la nueva contraseña
        $user->password = Hash::make($request->newPassword);
        $user->save(); // Esto debería funcionar ahora
        return redirect()->route('cambiar_password')->with('success', 'Contraseña cambiada exitosamente.');
    } catch (\Exception $e) {
        return back()->withErrors(['error' => 'Error al cambiar la contraseña: ' . $e->getMessage()]);
    }
}

    
}
