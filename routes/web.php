<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\formaPagamentoController;
use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\PedidoController;

Route::get('/', function () {
    return redirect()->route('login');
});

// Route::get('usuarios', [UserController::class, 'index'])->name('usuarios.index');
// Route::get('usuarios/create', [UserController::class, 'create'])->name('usuarios.create');
// Route::post('usuarios', [UserController::class, 'store'])->name('usuarios.store');
Route::resource('usuarios', UserController::class);


Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    // Rotas do perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('usuarios', UserController::class);
    Route::resource('categorias', CategoriaController::class);
    Route::resource('formaPagamento', formaPagamentoController::class);
    Route::resource('estoque', EstoqueController::class);
    Route::resource('produtos', ProdutoController::class);
    Route::resource('pedidos', PedidoController::class);
});

require __DIR__.'/auth.php';
