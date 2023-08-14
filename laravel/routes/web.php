<?php


use App\Http\Controllers\MovieController;
use App\Http\Controllers\IpController;
use App\Http\Controllers\GDfileController;

Route::get('/fetch-movie', function () {
    return view('fetch-movie');
})->name('fetch-movie');

Route::post('/fetch-movie', function () {
    $movieId = request()->input('movieId');
    $accessToken = request()->input('accessToken');

    $movieController = new MovieController();
    $response = $movieController->getSacmsData($movieId, $accessToken);

    return view('fetch-movie', ['response' => $response]);
});


Route::get('/fetch-ip', function () {
    return view('fetch-ip');
})->name('fetch-ip');

Route::post('/fetch-ip', function () {
    $movieId = request()->input('ip');
    $accessToken = request()->input('accessToken');

    $movieController = new IpController();
    $response = $movieController->getSacmsData($movieId, $accessToken);

    return view('fetch-ip', ['response' => $response]);
});

Route::get('/fetch-gd', function () {
    return view('fetch-gd');
})->name('fetch-gd');

Route::post('/fetch-gd', function () {
    $movieId = request()->input('fileId');
    $accessToken = request()->input('accessToken');

    $movieController = new GDfileController();
    $response = $movieController->getSacmsData($movieId, $accessToken);

    return view('fetch-gd', ['response' => $response]);
});
