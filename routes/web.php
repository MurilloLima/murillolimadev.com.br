<?php

use App\Http\Controllers\Admin\AppController;
use App\Http\Controllers\Admin\NoticiasController;
use App\Http\Controllers\Admin\ProjetosController;
use App\Http\Controllers\Admin\WebsiteController;
use App\Http\Controllers\Home\ContatoController;
use App\Http\Controllers\Home\HomeController as HomeHomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\Contato;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.pages.index');
Route::get('/sobre', [HomeController::class, 'sobre'])->name('home.pages.sobre');
Route::get('/contatos', [HomeController::class, 'contatos'])->name('home.pages.contatos');
Route::get('/falecomigo', [HomeController::class, 'fale'])->name('home.pages.fale');
Route::get('/aplicativo', [HomeController::class, 'aplicativo'])->name('home.pages.aplicativo');
Route::post('/falecomigo/store', [ContatoController::class, 'store'])->name('home.pages.falecomigo.store');
Route::get('/politica', [HomeController::class, 'politica'])->name('home.pages.politica');


Route::get('/dashboard', function () {
    $data = Contato::latest()->get();
    return view('admin.pages.contact.index', compact('data'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //contatos
    Route::get('/admin/falecomigo', [ContatoController::class, 'index'])->name('admn.pages.conatatos.index');
    Route::get('/admin/falecomigo/{id}', [ContatoController::class, 'destroy'])->name('admn.pages.falecomigo.delete');

    //website
    Route::get('/admin/projeto/website', [WebsiteController::class, 'index'])->name('admin.pages.website.index');
    Route::get('/admin/projeto/website/create', [WebsiteController::class, 'create'])->name('admin.pages.website.create');
    Route::post('/admin/projeto/website/store', [WebsiteController::class, 'store'])->name('admin.pages.website.store');
    Route::delete('/admin/projeto/website/delete/{id}', [WebsiteController::class, 'destroy'])->name('admin.pages.website.destroy');

     //app
     Route::get('/admin/projetos/app', [AppController::class, 'index'])->name('admin.pages.app.index');
     Route::get('/admin/projeto/app/create', [AppController::class, 'create'])->name('admin.pages.app.create');
     Route::post('/admin/projeto/app/store', [AppController::class, 'store'])->name('admin.pages.app.store');
     Route::delete('/admin/projeto/app/delete/{id}', [AppController::class, 'destroy'])->name('admin.pages.app.destroy');

    // sair
    Route::get('/sair', [HomeController::class, 'destroy'])->name('sair');

});

//login
Route::post('/auth', [HomeHomeController::class, 'authenticate'])->name('admin.auth');

require __DIR__.'/auth.php';
