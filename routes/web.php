<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WardDisplayController;

//Display
Route::group(['prefix' => 'warddisplay'], function () {
    Route::get('/{ward}', [WardDisplayController::class, 'index'])->name('display.index');
});

Route::group(['prefix' => 'refresh'], function () {
     Route::get('/cardiology', [WardDisplayController::class, 'oncallCdSec'])->name('refresh.cardiology');
     Route::get('/cardiothoracic', [WardDisplayController::class, 'oncallCtSec'])->name('refresh.cardiothoracic');
     Route::get('/nursemanager', [WardDisplayController::class, 'oncallNmSec'])->name('refresh.nursemanager');
     Route::get('/anaesthesia', [WardDisplayController::class, 'oncallAnaesSec'])->name('refresh.anaesthesia');
     Route::get('/pchc', [WardDisplayController::class, 'oncallPchcSec'])->name('refresh.pchc');
     Route::get('/other', [WardDisplayController::class, 'oncallOthSec'])->name('refresh.other');
     Route::get('/ert', [WardDisplayController::class, 'oncallErtSec'])->name('refresh.ert');
     Route::get('/sa', [WardDisplayController::class, 'oncallSaSec'])->name('refresh.sa');
     Route::get('/patient', [WardDisplayController::class, 'patientSec'])->name('refresh.patient');
});

// Route::group(['prefix' => 'test'], function () {
//     Route::get('/{ward}', [WardDisplayController::class, 'test'])->name('display.test');
// });

// Route::get('/refresh/patients/{ward}', function ($ward) {
//     return view('display.sections.patients', compact('beds'));
// });