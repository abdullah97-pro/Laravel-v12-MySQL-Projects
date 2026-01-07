<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     // return view('welcome');
//     // return "Welcome to Fanaven Educational Center\t Fanaven Technology";
//     // return 2+3;
//     return "Laravel v12 Specialist + Job by Fanaven Technology";
// });

// Route::get('message', function() {
//     return "Grow your coding with Fanaven Educaional Center";
// });

// Route::get('/customer/home', function() {
//     return "Welcome to home page";
// });

// Route::get('/customer/user/{id}', function($id) {
//     return "User ID ".$id." Welcome";
// });

// Route::get('/customer/user/{name}', function($name) {
//     return "User ".$name." Welcome";
// });

// Route::get('/customer/order/{orderId}/product/{productId}', function($orderId,$productId) {
//     return "Order $orderId with Product $productId is availble";
// });

// Route::get('/customer/category/{name?}', function($name='All') {
//     return "Discount on $name category";
// });

// Route::prefix('/customer/')->group(function() {
//     Route::get('/home', function() {
//         return "Welcome to home page";
//     });

//     Route::get('/user/{id}', function($id) {
//         return "User ID ".$id." Welcome";
//     });

//     Route::get('/user/{name}', function($name) {
//         return "User ".$name." Welcome";
//     });

//     Route::get('/order/{orderId}/product/{productId}', function($orderId,$productId) {
//         return "Order $orderId with Product $productId is availble";
//     });

//     Route::get('/category/{name?}', function($name='All') {
//         return "Discount on $name category";
//     });
// });

Route::get('/home', function() {
    return view('layout.home');
});

Route::middleware('/auth/')->group(function() {

    Route::get('/user/{id}', function($id) {
        return "User ID ".$id." Welcome";
    });

    Route::get('/user/{name}', function($name) {
        return "User ".$name." Welcome";
    });

    Route::get('/order/{orderId}/product/{productId}', function($orderId,$productId) {
        return "Order $orderId with Product $productId is availble";
    });

    Route::get('/category/{name?}', function($name='All') {
        return "Discount on $name category";
    });
});