<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('punya-fadli.index');
});
Route::get('/bangfajar', function () {
    return view(view: 'punya-fajar.tes');
});
