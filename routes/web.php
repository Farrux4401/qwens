<?php

use App\Livewire\CreateParameter;
use App\Livewire\Datatable;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('themes.home');
});


Route::get('/datatable', function () {
    return view('themes.datatable');
});


// Route::get('/create-parameter', CreateParameter::class)->name('create-parameter');


Route::get('/create-parameter', function () {
    return view('themes.create-parameter');
});

Route::get('/tax', function () {
    return view('themes.tax');
});

Route::get('/edit-tax', function () {
    return view('themes.edit-tax');
});

Route::get('/roles', function () {
    return view('themes.roles');
});

Route::get('/create-roles', function () {
    return view('themes.create-roles');
});

Route::get('/edit-roles', function () {
    return view('themes.edit-roles');
});

Route::get('/modules', function () {
    return view('themes.modules');
});

Route::get('/edit-modules', function () {
    return view('themes.edit-modules');
});

Route::get('/email-logs', function () {
    return view('themes.email-logs');
});

Route::get('/payment-invoice', function () {
    return view('themes.payment-invoice');
});

Route::get('/notifications', function () {
    return view('themes.notifications');
});

Route::get('/create-notifications', function () {
    return view('themes.create-notifications');
});

Route::get('/promo-code', function () {
    return view('themes.promo-code');
});

Route::get('/profile', function () {
    return view('themes.profile');
});

Route::get('/all-orders', function () {
    return view('themes.all-orders');
});

Route::get('/edit-orders', function () {
    return view('themes.edit-orders');
});

Route::get('/create-ticket', function () {
    return view('themes.create-ticket');
});

Route::get('/ticket-list', function () {
    return view('themes.ticket-list');
});

Route::get('/all-users-list', function () {
    return view('themes.all-users-list');
});


Route::get('/ticket-id', function () {
    return view('themes.ticket-id');
});


Route::get('/ticket-user', function () {
    return view('themes.ticket-user');
});

Route::get('/order-list', function () {
    return view('themes.order-list');
});

Route::get('/edit-orders-user', function () {
    return view('themes.edit-orders-user');
});

Route::get('/finance', function () {
    return view('themes.finance');
});

Route::get('/virtual', function () {
    return view('themes.virtual');
});

Route::get('/create-tariff', function () {
    return view('themes.create-tariff');
});


Route::get('/my-server', function () {
    return view('themes.my-server');
});


Route::get('/sign-up', function () {
    return view('themes.sign-up');
});

Route::get('/login', function () {
    return view('themes.login');
});

Route::get('/password-recovery', function () {
    return view('themes.password-recovery');
});

Route::get('/password-recovery2', function () {
    return view('themes.password-recovery2');
});

Route::get('/servers', function () {
    return view('themes.servers');
});

Route::get('/security', function () {
    return view('themes.security');
});
