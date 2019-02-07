<?php

Route::get('/', '\\' . \App\Http\Controllers\indexController::class)->name('start');
