<?php

use App\Http\Controllers\ViewsController;
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

Route::get('/', [ViewsController::class, 'index']);
Route::get('/nosotros', [ViewsController::class, 'about_us'])->name('About_us');
Route::get('/profesores', [ViewsController::class, 'profesores'])->name('Profesores');
Route::get('/modelo', [ViewsController::class, 'modelo'])->name('Modelo');
Route::get('/informacion', [ViewsController::class, 'informacion'])->name('informacion');
Route::get('/institucional', [ViewsController::class, 'institucional'])->name('institucional');
Route::get('/actividades', [ViewsController::class, 'actividades'])->name('actividades');
Route::get('/noticias', [ViewsController::class, 'posts_view'])->name('News');
Route::get('/noticias/{post_id}', [ViewsController::class, 'post_see_view'])->name('News_see');
Route::get('/proyectos', [ViewsController::class, 'posts_view'])->name('Project');
Route::get('/proyectos/{post_id}', [ViewsController::class, 'post_see_view'])->name('Project_see');
Route::get('/eventos', [ViewsController::class, 'posts_view'])->name('Event');
Route::get('/eventos/{post_id}', [ViewsController::class, 'posts_view'])->name('Event_see');


/*
/ CMS routes config
*/
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/admin/{path}', function () {
    return view('admin.index');
})->where('path', '.*');

