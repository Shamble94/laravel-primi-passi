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
    $welcome = "Hello World";
    return view('home', compact("welcome"));
})->name("home");

Route::get('/students', function () {
    $students_data = [
        "Giuseppe Belforte", "Nicholas Fratus", "Emanuele Scarpantoni", "Etc.."
    ];
    return view('students', compact("students_data"));
})->name("students");

Route::get('/teachers', function () {
    $teachers_data = [
        "Fabrizio Mastrobattista", "Thomas de Luca", "Antonio Sagoleo"
    ];
    return view('teachers', compact("teachers_data"));
})->name("teachers");

    