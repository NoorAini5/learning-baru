<?php

use App\Http\Controllers\Admin\Master\MapelController;
use Illuminate\Support\Facades\Route;


Route::get('/token', function () {
    return csrf_token();
});

Route::group(['middleware' => 'auth:web', 'as' => 'user.'], function () {
    Route::view('/', 'home')->name('home');

    Route::group(['namespace' => 'User'], function () {
    Route::resource('mapel', 'siswa\MapelController');
    Route::resource('mapel2', 'siswa\Mapel2Controller');
});
        // Route::group(['prefix' => '/mapel', 'as' => 'mapel.', 'namespace' => 'user'], function () {
        // Route::resource('mapel2', 'Mapel2Controller');
        // });
});



require __DIR__ . '/demo.php';
