<?php

use App\Http\Controllers\InfoController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return "hallo welt";
    // return view('welcome');
});

Route::get('/hallo', function () {
    return view('hallo');
});


Route::get('/test', function () {
    return "ich bin ein test...";
    // return view('welcome');
});

Route::get('/user', function () {
    $id = request('id');
    $name = request('name');
    $lastname = request('lastname');

    return view('user',[
        'id' => $id,
        'name' => $name, 
        'lastname' => $lastname
    ]);
});

Route::get('/user/{name}/{lastname}', function ($name, $lastname) {
    return "Hallo " . $name ." " . $lastname;
});

Route::get('/products', function (){
    $id = request('id');
    echo "here is your product with the id: " . $id;
});

Route::get('/data', function (){
    return ['one' => 'only',
            'two' => 'ok'
];
});

Route::get('/info', [InfoController::class, 'show']);

Route::get('/news/{id}', [NewsController::class, 'show']);
