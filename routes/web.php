<?php

use App\Http\Controllers\CKBoxExampleController;
use Illuminate\Support\Facades\Route;

Route::get('/{example?}', [CKBoxExampleController::class, 'show'])->name('ckbox_example');
Route::get('/ckbox/token', [CKBoxExampleController::class, 'token'])->name('ckbox_token');
