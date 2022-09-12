<?php

use App\Http\Controllers\ContactController;
use App\Models\Contact;
use App\Models\Project;
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

Route::get('/', function () {
    return view('home.pages.index');
});
Route::get('view/{id}', [ContactController::class, 'view'])->name('admin.contact.view');

Route::post('store/', [ContactController::class, 'store'])->name('home.contact.store');

Route::get('/dashboard', function () {
    $data = Contact::orderby('id', 'desc')->paginate();
    return view('admin.pages.contact', compact('data'));
})->middleware(['auth'])->name('dashboard');

Route::get('/project', function () {
    $data = Project::orderby('id', 'desc')->paginate();
    return view('admin.pages.project', compact('data'));
})->middleware(['auth'])->name('project');

require __DIR__ . '/auth.php';
