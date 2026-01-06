<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    // return "Welcome to Fanaven Educational Center\t Fanaven Technology";
    // return 2+3;
    return "Laravel v12 Specialist + Job by Fanaven Technology";
});

Route::get('message', function() {
    return "Grow your coding with Fanaven Educaional Center";
});
