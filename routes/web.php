<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Contactuscontroller;



Route::get('/', function () {
    return view('login');
});

Route::post('/send-email',[Contactuscontroller::class,'sendEmail'])->name('Sendemail');