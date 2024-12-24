<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('punya-fadli.index');
});
Route::get('/fajar', function () {
    return view('punya-fajar.tes');
});
