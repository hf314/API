<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Key;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class GenerateKeyController extends Controller
{
    public function NewKey(Request $request) {
        $validator = Validator::make($request->all(), [
            'permissions' => 'required|in:observer,editor',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 200);
        }

        $apiKey = Str::random(64);

        $key = new Key;
        $key->key = $apiKey;
        $key->permissions = $request->permissions;
        $key->save();

        return response()->json([$apiKey, $request->permissions]);
    }
}
