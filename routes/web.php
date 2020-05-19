<?php

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

Route::livewire('/', 'post.index')->name('post.index');
Route::livewire('/create', 'post.create')->name('post.create');
Route::livewire('/edit/{id}', 'post.edit')->name('post.edit');
