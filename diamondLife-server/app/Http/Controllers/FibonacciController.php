<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class FibonacciController extends Controller
{
    public function fibonacci(Request $request){
        Log::info($request);
        return response()->json($request);
    }
}