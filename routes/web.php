<?php

use App\Livewire\Administracao\Create as AdministracaoCreate;
use App\Livewire\Administracao\Index as AdministracaoIndex;
use App\Livewire\Aluno\Create;
use App\Livewire\Aluno\Edit;
use App\Livewire\Aluno\Index;
use App\Livewire\Aluno\Perfil;
use App\Livewire\Auth\Login as AuthLogin;
use App\Livewire\Professor\Create as ProfessorCreate;
use App\Livewire\Professor\Edit as ProfessorEdit;
use App\Livewire\Professor\Index as ProfessorIndex;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/aluno/create', Create::class);
Route::get('/aluno/index', Index::class);
Route::get('/aluno/edit', Edit::class);

Route::get('/', AuthLogin::class);

Route::get('/aluno', function () {
    return Auth::user();
})->middleware('auth', 'role:aluno')->name('aluno.dashboard');

Route::get('/aluno', function () {
    return Auth::user();
})->middleware('auth', 'role:admin')->name('admin.dashboard');

Route::get('/aluno', function () {
    return Auth::user();
})->middleware('auth', 'role:aluno')->name('professor.dashboard');

Route::get('/user', function () {
    return 'login user';
})->middleware('auth', 'role:user')->name('user.dashboard');


Route::get('/professor/create', ProfessorCreate::class);
Route::get('/professor/index', ProfessorIndex::class);
Route::get('/professor/edit', ProfessorEdit::class);



Route::get('/admin/create', AdministracaoCreate::class);
Route::get('/admin/index', AdministracaoIndex::class);

Route::get('/aluno/perfil', Perfil::class);
