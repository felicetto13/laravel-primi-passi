<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $users = 
    [
        [
            "username"=> "felix31",
            "password"=> "HelloMoto!",
            "role"=>"admin"
        ],
        [
            "username"=> "danto55",
            "password"=> "DipinTo@2",
            "role"=>"user"
        ],
        [
            "username"=> "felix31",
            "password"=> "HelloMoto!",
            "role"=>"tutor"
        ],
    ];

    return view('home',["users"=>$users]);
})->name("home");


