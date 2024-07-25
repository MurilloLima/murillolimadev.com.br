<?php

use App\Http\Controllers\Admin\NoticiasController;
use App\Http\Controllers\Admin\ProjetosController;
use App\Http\Controllers\Home\ContatoController;
use App\Http\Controllers\Home\HomeController as HomeHomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\Projeto;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.pages.index');
Route::get('/sobre', [HomeController::class, 'sobre'])->name('home.pages.sobre');
Route::get('/contatos', [HomeController::class, 'contatos'])->name('home.pages.contatos');
Route::post('/contatos/store', [ContatoController::class, 'store'])->name('home.pages.contact.store');


Route::get('/dashboard', function () {
    $data = Projeto::latest()->get();
    return view('admin.pages.index', compact('data'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    //contatos
    Route::get('/admin/contatos', [ContatoController::class, 'index'])->name('admn.pages.conatatos.index');

    //projetos
    Route::get('/admin/projetos', [ProjetosController::class, 'index'])->name('admn.pages.projetos.index');
    Route::get('/admin/projeto/create', [ProjetosController::class, 'create'])->name('admn.pages.projetos.create');
    Route::post('/admin/projeto/store', [ProjetosController::class, 'store'])->name('admn.pages.projetos.store');
    Route::delete('/admin/projeto/delete/{id}', [ProjetosController::class, 'destroy'])->name('admn.pages.projetos.destroy');

    // sair
    Route::get('/sair', [HomeController::class, 'destroy'])->name('sair');

});

//login
Route::post('/auth', [HomeHomeController::class, 'authenticate'])->name('admin.auth');

require __DIR__.'/auth.php';
