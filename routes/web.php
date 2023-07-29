<?php

use App\Http\Livewire\Pages\About;
use App\Http\Livewire\Pages\Home;
use App\Http\Livewire\Pages\Project\ProjectList;
use App\Http\Livewire\Pages\Project\ProjectShow;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/projects', ProjectList::class)->name('projects.list');
Route::get('/projects/{project:slug}', ProjectShow::class)->name('projects.show');

