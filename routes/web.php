<?php

Route::get('/', '\\' . \App\Http\Controllers\indexController::class)->name('start');
Route::post('/', '\\' . \App\Http\Controllers\saveFormController::class)->name('save_form');

Route::group(['prefix' => 'page_2', 'namespace' => 'Text'], function () {
    Route::get('/', '\\' . \App\Http\Controllers\textController::class)->name('text');
    Route::post('/', '\\' . \App\Http\Controllers\textNextController::class)->name('text_next');
});

Route::group(['prefix' => 'page_3', 'namespace' => 'Input'], function () {
    Route::get('/', '\\' . \App\Http\Controllers\inputController::class)->name('input');
    Route::post('/', '\\' . \App\Http\Controllers\inputNextController::class)->name('input_next');
});

Route::group(['prefix' => 'page_4', 'namespace' => 'Checkbox'], function () {
    Route::get('/', '\\' . \App\Http\Controllers\checkboxController::class)->name('checkbox');
    Route::post('/', '\\' . \App\Http\Controllers\checkboxNextController::class)->name('checkbox_next');
});

Route::group(['prefix' => 'page_5', 'namespace' => 'Button'], function () {
    Route::get('/', '\\' . \App\Http\Controllers\buttonController::class)->name('button');
    Route::post('/', '\\' . \App\Http\Controllers\buttonNextController::class)->name('button_next');
});

Route::get('/finish', '\\' . \App\Http\Controllers\finishController::class)->name('finish');

