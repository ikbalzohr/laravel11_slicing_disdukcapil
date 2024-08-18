<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Dashboard::class)->name('dashboard');

Route::get('/berita', \App\Livewire\Berita::class)->name('berita');

Route::get('/pengguna', \App\Livewire\Pengguna::class)->name('pengguna');