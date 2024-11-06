<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

//Route::apiResource('posts', PostController::class);

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/greeting', function () {
    return 'Hello World';
});

?>