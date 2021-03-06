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

Route::get('/discount', function () {
    return view('discount');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admin'
        && $request->password == 'admin') {
        return view('welcome_admin');
    }
    return view('login_error');
});


Route::post('/discount', function (\Illuminate\Http\Request $request) {
    $productDescription = $request->description;
    $listPrice = $request->price;
    $discountPercent = $request->percent;
    $discountAmount = $listPrice * $discountPercent * 0.01;
    $discountPrice = $listPrice * $discountAmount;
    return view('show', compact('productDescription', 'listPrice', 'discountPercent', 'discountAmount', 'discountPrice'));
});

Route::get('/dictionary', function () {
    return view('dictionary');
});

Route::post('/dictionary', function (\Illuminate\Http\Request $request) {
    switch ($request->name) {
        case "dog":
            echo "chó";
            break;
        case "cat":
            echo "mèo";
            break;
        case "chicken":
            echo "gà";
            break;
        case "pig":
            echo "lợn";
            break;
        case "people":
            echo "người";
            break;
        default:
            echo "Từ này chưa có trong từ điển";
            break;
    }

});




