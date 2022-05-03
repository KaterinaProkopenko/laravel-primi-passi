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
    $menu = [
        [
            'name' => "Home",
            'link' => "/"
        ],
        [
            'name' => "Documentation",
            'link' => "/documentation"
        ],
        [
            'name' => "About us",
            'link' => "/aboutUs"
        ],
    ];
    $data = [
        "array" => $menu,
    ];

    return view('home', $data);
});

Route::get('/documentation', function () {
    $menu = [
        [
            'name' => "Home",
            'link' => "/"
        ],
        [
            'name' => "Documentation",
            'link' => "/documentation"
        ],
        [
            'name' => "About us",
            'link' => "/aboutUs"
        ],
    ];
    $data = [
        "array" => $menu,
    ];
    return view('documentation', $data);
});

Route::get('/aboutUs', function () {
    $menu = [
        [
            'name' => "Home",
            'link' => "/"
        ],
        [
            'name' => "Documentation",
            'link' => "/documentation"
        ],
        [
            'name' => "About us",
            'link' => "/aboutUs"
        ],
    ];
    $data = [
        "array" => $menu,
    ];
    return view('aboutUs', $data);
});
