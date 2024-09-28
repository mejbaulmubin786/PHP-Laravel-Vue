<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

// Livetest Task 1
Route::post('/form-submit', function (Request $request) {

    $email = $request->input('email');

    if($email){
        return response()->json([
            'status' => 'success',
            'message' => 'Form submitted successfully.',
            'email' => $email
        ]);

    }else{

        return response()->json([
            'status' => 'failed',
            'message' => 'Form submission failed.'
       ]);
    }
});

//Livetest Task 2
Route::get('/client-ip', function (Request $request) {
    $clientIp = $request->ip();
    return $clientIp;
});