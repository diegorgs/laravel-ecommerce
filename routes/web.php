<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;


// User
Route::resource('users', UserController::class);

// Site
Route::get('/',[ SiteController::class,'index'])->name('site.index');
Route::get('/produto/{slug}',[ SiteController::class,'details'])->name('site.details');
Route::get('/categoria/{id}',[ SiteController::class, 'categoria'])->name('site.categoria');

// Carrinho de Compras
Route::get('/carrinho', [CarrinhoController::class, 'carrinhoLista'])->name('site.carrinho');
Route::post('/carrinho',[CarrinhoController::class, 'adicionarCarrinho'])->name('site.addCarrinho');
Route::post('/atualizar',[CarrinhoController::class, 'atualizarCarrinho'])->name('site.atualizarCarrinho');
Route::post('/remover',[CarrinhoController::class, 'removerCarrinho'])->name('site.removerCarrinho');
Route::get('/limpar',[CarrinhoController::class, 'limparCarrinho'])->name('site.limparCarrinho');

// Login
Route::view('/login', 'login.form')->name('login.form');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
Route::get('/register',[LoginController::class, 'create'])->name('login.create');

// Admin
Route::get('admin/dashboard',[DashboardController::class, 'index'])->name('admin.dashboard')->middleware('auth');;


