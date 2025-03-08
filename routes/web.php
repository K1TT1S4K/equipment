<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\EditDocument;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Route::view('equipment', 'livewire.equipments.show')
//     ->middleware(['auth', 'verified'])
//     ->name('equipment');

// Route::view('document', 'livewire.documents.show')
//     ->middleware(['auth', 'verified'])
//     ->name('document');

Route::middleware(['auth'])->group(function () {
    Route::get('equipment', [EquipmentController::class, 'index'])->name('equipment');
    Route::get('equipment/add', [EquipmentController::class, 'create'])->name('equipment.add');
    Route::post('equipment', [EquipmentController::class, 'store'])->name('equipment.store');
    Route::get('equipment/{id}/edit', [EquipmentController::class, 'edit'])->name('equipment.edit');
    Route::put('equipment/{id}', [EquipmentController::class, 'update'])->name('equipment.update');
    Route::delete('equipment/{id}', [EquipmentController::class, 'destroy'])->name('equipment.destroy');
});

// Route::get('user', [UserController::class, 'index'])
//     ->middleware(['auth'])
//     ->name('user');

// Route::get('user/add', [UserController::class, 'create'])
//     ->middleware(['auth'])
//     ->name('user.add');

Route::middleware(['auth'])->group(function () {
    Route::get('user', [UserController::class, 'index'])->name('user');
    Route::get('user/add', [UserController::class, 'create'])->name('user.add');
    Route::post('user', [UserController::class, 'store'])->name('user.store');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('user.show');
    Route::get('user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('user/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('document', [DocumentController::class,'index'])->name('document');
    Route::get('document/search', [DocumentController::class, 'search'])->name('document.search');
    Route::get('document/create', [DocumentController::class, 'create'])->name('document.create');
    Route::post('document', [DocumentController::class, 'store'])->name('document.store');
    Route::get('document/{id}/edit', [DocumentController::class, 'edit'])->name('documents.edit');
    Route::put('document/{id}', [DocumentController::class, 'update'])->name('documents.update');
    Route::delete('document/{id}', [DocumentController::class, 'destroy'])->name('document.delete');
});

// Route::middleware(['auth'])->group(function () {
//     Route::redirect('users', 'users/show');

//     Volt::route('users/show', 'users.show')->name('users.show');
//     Volt::route('users/add', 'users.add')->name('users.add');
// });

// Route::get('/export', [EquipmentExportController::class, 'export'])
//     ->middleware(['auth'])
//     ->name('export.excel');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
