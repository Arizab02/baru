<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class doaController extends Controller
{
    public function getapi()
    {
        $doa = Http::get('https://api.myquran.com/v2/doa/acak');

        if($doa->successful()){
            $data = $doa->json();
            // $arab = json_encode($data['data']['arab'],JSON_UNESCAPED_UNICODE);

            return view('doa', compact('data'));
        }

        return response()->json([
            'message' => 'terjadi kesalahan'
        ]);
    }
}
