<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/login', fn() => view('auth.login'))->name('login');
Route::get('/dashboard', fn() => view('pages.dashboard.index'))->name('dashboard');

Route::get('/categories', fn() => view('pages.categories.index'))->name('categories');
Route::get('/transactions', fn() => view('pages.transactions.index'))->name('transactions');
Route::get('/accounts', fn() => view('pages.accounts.index'))->name('accounts');
Route::get('/budgets', fn() => view('pages.budgets.index'))->name('budgets');
Route::get('/settings', fn() => view('pages.settings.index'))->name('settings');
