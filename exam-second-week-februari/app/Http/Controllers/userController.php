<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return response()->json($user);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Log::info($request);
        Log::info('flag 1');
        try{
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required'
            ]);
        }
        catch(ValidationException $e){
            return response()->json(['error_message' => $e->getMessage()]);
        }
        Log::info('flag 2');

        $user = User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> $request->password,
        ]);

        Log::info('flag 3');
        return response()->json($user);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);

        if(!$user){
            return response()->json(['message' => 'Tidak ada data']);
        }
            return response()->json($user);
        }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $update = $request->validate([
            'name' => 'required',
            'email' => 'nullable',
            'password' => 'required'
        ]);

        $user->update($update);

        return response()->json($update);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        if(!$user){
            return response()->json(['message' => 'User not Found']);
        }

        $user->delete();

        return response()->json($user);
    }
}
