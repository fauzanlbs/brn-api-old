<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PerformanceMonitoringController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

// App Route
Route::middleware(['auth:sanctum'])->group(function () {

    Route::get('/dashboard', App\Http\Livewire\Dashboard\Show::class)->name('dashboard');

    // Performance Monitoring
    Route::prefix('performance-monitoring')->group(function () {
        Route::get('/', [PerformanceMonitoringController::class, 'index'])->name('monitoring.dashboard');
    });

    // Export
    Route::prefix('export')->group(function () {
        Route::get('/customers', [CustomerController::class, 'fileCustomersExport'])->name('export.customers');
        Route::get('/customer-contacts', [CustomerController::class, 'fileCustomerContactsExport'])->name('export.customer.contacts');
    });
});
