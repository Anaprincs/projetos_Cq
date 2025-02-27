<?php

use App\Livewire\Aluno\Create;
use App\Livewire\Aluno\Edit;
use App\Livewire\Aluno\Index;
use Illuminate\Support\Facades\Route;


Route::get('/aluno/create', Create::class);
Route::get('/aluno/index', Index::class);
Route::get('/aluno/edit', Edit::class);