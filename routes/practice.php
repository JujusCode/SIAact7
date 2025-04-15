<?php

use Illuminate\Support\Facades\Route;


Route::get('gwapo/ko', function () {
    return 'boto sa iro';
});

Route::prefix('gwapo')->group(function () {
    Route::get('ko', function () {
        return 'boto sa iro';
    });
    Route::get('ta', function () {
        return 'hatdog';
    });
})->name('Kinalay mani sir');


Route::get('binibining/{salamander}', function ($salamander) {
    return 'binibining may ' . $salamander;
});

Route::fallback(function () {
    return "OLALA NOT HERE MY FREN";
});


