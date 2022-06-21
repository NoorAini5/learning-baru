<?php

use App\Http\Controllers\Admin\Master\MapelController;
use App\Http\Controllers\user\siswa\Mapel2Controller;
use Illuminate\Support\Facades\Route;


Route::get('/token', function () {
    return csrf_token();
});

Route::group(['middleware' => 'auth:web', 'as' => 'user.'], function () {
    Route::view('/', 'home')->name('home');

    Route::group(['namespace' => 'User'], function () {
    Route::resource('mapel', 'siswa\MapelController');
    Route::resource('mapel2', 'siswa\Mapel2Controller');
    Route::resource('materi', 'siswa\MateriController');
    Route::resource('tampilmateri', 'siswa\MateriController@show');
    // Route::post('getMapel/{id}', 'siswa\Mapel2Controller@indexs');
    // Route::get('mapel2/{id}',[Mapel2Controller::class,'index'])->name('index');
    // Route::get('mapel2/{id}', [Mapel2Controller::class, 'show'])->name('show');
});
});



require __DIR__ . '/demo.php';
