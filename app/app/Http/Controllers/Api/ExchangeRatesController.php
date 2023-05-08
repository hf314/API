<?php

namespace App\Http\Controllers\Api;

use App\Models;
use App\Models\Key;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ExchangeRatesController extends Controller
{
    public function ExchangeRateOfDay(Request $request) {
        $validator = Validator::make($request->all(), [
            'date' => 'required|date_format:Y-m-d'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 200);
        }

        $items = Models\ExchangeRate::where('date', $request->date)->get();

        if ($items->isEmpty()) {
            return response()->json([]);
        }

        return response()->json($items);
    }



    public function SingleCurrencyRateOnDate(Request $request) {
        $validator = Validator::make($request->all(), [
            'date' => 'required|date_format:Y-m-d',
            'currency' => 'required|alpha|size:3'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 200);
        }

        $items = Models\ExchangeRate::where(['date'=> $request->date, 'currency' => $request->currency])->get();

        if ($items->isEmpty()) {
            return response()->json([]);
        }

        return response()->json($items);
    }



    public function AddRate(Request $request) {

        $validator = Validator::make($request->all(), [
            'date' => 'required|date_format:Y-m-d',
            'currency' => 'required|size:3',
            'amount' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 200);
        }

        $rate = Models\ExchangeRate::where('date', $request->date)->where('currency', strtoupper($request->currency))->first();

        if ($rate) { return response()->json("Duplicate entry 'currency' & 'date'"); }

        $newRate = new Models\ExchangeRate();
        $newRate->date = $request->date;
        $newRate->currency = strtoupper($request->currency);
        $newRate->amount = $request->amount;
        $newRate->save();

        return response()->json('Record has been successfully added');
    }
}
