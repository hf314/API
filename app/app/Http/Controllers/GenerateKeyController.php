<?php

namespace App\Http\Controllers;

use App\Models;
use App\Models\Key;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GenerateKeyController extends Controller
{
    public function newKey() {
        return view('generate-key');
    }

    public function sum(Request $request) {

        $apiKey = Str::random(64);

        $key = new Key;
        $key->key = $apiKey;
        $key->save();

        return view('result', ['result' => $apiKey]);
    }
}
