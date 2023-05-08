<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Key;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GenerateKeyController extends Controller
{
    public function NewKey() {

        $apiKey = Str::random(64);

        $key = new Key;
        $key->key = $apiKey;
        $key->save();

        return response()->json($apiKey);
    }
}
