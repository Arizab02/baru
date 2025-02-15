<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        Log::info('flag 1');
        try{
            $validate = $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);
        }catch(ValidationException $e){
            return response()->json(['error_message' => $e->getMessage()]);
        }
        Log::info('flag 2');

        $user  = User::where('email',$validate['email'])->first();

        Log::info($user->password);
        Log::info('flag 3');
        if(!$user || !Hash::check($validate['password'], $user->password)){
            return response()->json([
                'message' => 'Password atau email salah'
            ]);
        }
        Log::info('flag 4');

        $token = $user->createToken('auth_token')->plainTextToken;

        Log::info('flag 5');
        return response()->json([
        'data' => $user,
        'message' => 'Login berhasil',
        'token' => $token,
    ]);
    }

    public function logout(Request $request)
    {
        $user = $request->user();

        $user->tokens()->delete();

        return response()->json([
            'message'=>'User '.$user->name.'berhasil logout'
        ]);
    }
}
