<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


// Route::get("/about", function () {
//     return "About Page";
// });

// Route::get("/about", function () {
//     return ["foo" => "bar", "bar" => "baz", "baz" => "dsf"];
// });

Route::get("/about", function () {
    return view("about");
});


Route::get("/contact", function () {
    return view("contact");
});

