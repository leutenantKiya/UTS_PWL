<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DataController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/courses', [PageController::class, 'course'])->name('course');
Route::get('/students', [PageController::class, 'student'])->name('student');
Route::get('/grades', [PageController::class, 'grade'])->name('grade');
Route::get('/assignments', [PageController::class, 'assignment'])->name('assignment');
Route::post('/login', [PageController::class, 'login']);

// Data routes
Route::get('/data/companies', [DataController::class, 'companies'])->name('data.companies');
Route::get('/data/company/{company_id}', [DataController::class, 'company'])->name('data.company');
Route::get('/data/customers', [DataController::class, 'customers'])->name('data.customers');
Route::get('/data/customer/{customer_id}', [DataController::class, 'customer'])->name('data.customer');
Route::get('/data/items', [DataController::class, 'items'])->name('data.items');
Route::get('/data/item/{item_code}', [DataController::class, 'item'])->name('data.item');
Route::get('/data/sales', [DataController::class, 'sales'])->name('data.sales');
Route::get('/data/sale/{purchase_number}', [DataController::class, 'sale'])->name('data.sale');