<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    public function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',
            'telephone' => 'required',
        ]);

        if ($request->password != $request->password_confirmation) {
            throw ValidationException::withMessages(['Senhas não coincidem!']);
        }

        $user = User::create([
            'name' => $request->name,
            'age' => $request->age,
            'email' => $request->email,
            'password' => $request->password,
            'telephone' => $request->telephone,
            'photo_url' => $request->photo_url,
        ]);

        return response()->json($user, 204);
    }
}
