<?php

namespace App\Http\Controllers;

use App\Models\kota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class kotaController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kota = kota::all();
        return response()->json($kota);
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

        $kota = kota::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> $request->password,
        ]);

        Log::info('flag 3');
        return response()->json($kota);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kota = kota::findOrFail($id);

        if(!$kota){
            return response()->json(['message' => 'Tidak ada data']);
        }
            return response()->json($kota);
        }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kota = kota::findOrFail($id);

        $update = $request->validate([
            'name' => 'required',
            'email' => 'nullable',
            'password' => 'required'
        ]);

        $kota->update($update);

        return response()->json($update);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kota = kota::findOrFail($id);

        if(!$kota){
            return response()->json(['message' => 'kota not Found']);
        }

        $kota->delete();

        return response()->json($kota);
    }
}

