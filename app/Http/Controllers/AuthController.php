<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Validation\ValidationException;


use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(LoginRequest $request){

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
        return response()->json([
            'token' => $user->createToken($request->email)->plainTextToken
        ]);
    }

    public function register(){

    }

    public function user(Request $request){
        return $request->user();
    }
}
