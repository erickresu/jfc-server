<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



// GAGAWA KA MUNA NG TABLE …..
// MIGRATION - IUP YUNG MGA TABLE NA GINAWA
// .
// .
// GAGAWA KA NA NG MODEL
// .
// .

// php artisan optimize:clear
// php artisan config:clear
// php artisan route:clear
// php artisan route:list
// php artisan serve
