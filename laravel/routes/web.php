<?php


use App\Http\Controllers\MovieController;

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
