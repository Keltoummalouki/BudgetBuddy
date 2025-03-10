<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'user' => $user,
            'token' => $token,
            'message' => 'User created successfully'
        ], 201);
    }

    public function login(Request $request) {

        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        if(!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([ 'message' => 'Email or password is incorrect!'], 401);
        }

        $user = auth()->user();
        
        if ($user) {
            $user->tokens()->delete();
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'user' => $user,
            'token' => $token,
            'message' => 'Connection successful'
        ]);
    }

    public function logout(Request $request) {

        if(auth()->user()) {
            auth()->user()->currentAccessToken()->delete();
            return response()->json(['message' => 'Logout successful!']);
        }

        return response()->json(['message' => 'No authenticated user'], 401);

    }

    public function user(Request $request) {
        return response()->json($request->user());
    }
}
