<?php

use App\Livewire\Aluno\Create;
use App\Livewire\Aluno\Edit;
use App\Livewire\Aluno\Index;
use App\Livewire\Auth\Login as AuthLogin;
use App\Livewire\Professor\Create as ProfessorCreate;
use App\Livewire\Professor\Edit as ProfessorEdit;
use App\Livewire\Professor\Index as ProfessorIndex;
use Illuminate\Support\Facades\Route;


Route::get('/aluno/create', Create::class);
Route::get('/aluno/index', Index::class);
Route::get('/aluno/edit', Edit::class);

Route::get('/', AuthLogin::class);

Route::get('/admin', function()
{ return 'login admin'; 
})->middleware('auth', 'role:admin')->name('admin.dashboard');

Route::get('/user', function(){
    return 'login user';

})->middleware('auth','role:user')->name('user.dashboard');


Route::get('/professor/create', ProfessorCreate::class);
Route::get('/professor/index', ProfessorIndex::class);
Route::get('/professor/edit', ProfessorEdit::class);







