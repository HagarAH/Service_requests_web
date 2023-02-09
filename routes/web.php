<?php

use App\Http\Controllers\ProfileController;
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



Route::get('/dashboard', function () {
    return view('layouts.main');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/user/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/user/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');
    Route::patch('/user/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/user/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'admin', 'middleware' => 'auth'], function () {


    //  Route::get('/profiles/{profile}', 'ProfileController@show')->name('profile.show'); //select

    Route::resource('/profileA', \App\Http\Controllers\AdminProfileController::class);
    Route::get('/posts', 'Admin\Post\IndexController')->name('post.index'); //select
    Route::delete('/posts/{post}', 'Admin\Post\DestroyController')->name('post.delete');

    Route::get('/servers', 'Admin\Server\IndexController')->name('server.index'); //select
    Route::delete('/servers/{server}', 'Admin\Server\DestroyController')->name('server.delete');

    Route::get('/cpus', 'Admin\Cpu\IndexController')->name('cpu.index'); //select
    Route::get('/cpus/create', 'Admin\Cpu\CreateController')->name('cpu.create'); //select
    Route::post('/cpus', 'Admin\Cpu\StoreController')->name('cpu.store'); //select
    Route::get('/cpus/{cpu}', 'Admin\Cpu\ShowController')->name('cpu.show'); //select
//    Route::get('/cpus/{cpu}/edit', 'Cpu\EditController')->name('cpu.edit'); //select
//    Route::patch('/cpus/{cpu}', 'Cpu\UpdateController')->name('cpu.update'); //select
//    Route::delete('/cpus/{cpu}', 'Cpu\DestroyController')->name('cpu.delete');

    Route::get('/daires', 'Admin\Daire\IndexController')->name('daire.index'); //select
    Route::get('/daires/create', 'Admin\Daire\CreateController')->name('daire.create'); //select
    Route::post('/daires', 'Admin\Daire\StoreController')->name('daire.store'); //select
    Route::get('/daires/{daire}', 'Admin\Daire\ShowController')->name('daire.show'); //select
//    Route::get('/daires/{daire}/edit', 'Admin\Daire\EditController')->name('daire.edit'); //select
//    Route::patch('/daires/{daire}', 'Admin\Daire\UpdateController')->name('daire.update'); //select
//    Route::delete('/daires/{daire}', 'Admin\Daire\DestroyController')->name('daire.delete');

    Route::get('/disks', 'Admin\Disk\IndexController')->name('disk.index'); //select
    Route::get('/disks/create', 'Admin\Disk\CreateController')->name('disk.create'); //select
    Route::post('/disks', 'Admin\Disk\StoreController')->name('disk.store'); //select
    Route::get('/disks/{disk}', 'Admin\Disk\ShowController')->name('disk.show'); //select
//    Route::get('/disks/{disk}/edit', 'Admin\Disk\EditController')->name('disk.edit'); //select
//    Route::patch('/disks/{disk}', 'Admin\Disk\UpdateController')->name('disk.update'); //select
//    Route::delete('/disks/{disk}', 'Admin\Disk\DestroyController')->name('disk.delete');

    Route::get('/mudurluks', 'Admin\Mudurluk\IndexController')->name('mudurluk.index'); //select
    Route::get('/mudurluks/create', 'Admin\Mudurluk\CreateController')->name('mudurluk.create'); //select
    Route::post('/mudurluks', 'Admin\Mudurluk\StoreController')->name('mudurluk.store'); //select
    Route::get('/mudurluks/{mudurluk}', 'Admin\Mudurluk\ShowController')->name('mudurluk.show'); //select
//    Route::get('/mudurluks/{mudurluk}/edit', 'Admin\Mudurluk\EditController')->name('mudurluk.edit'); //select
//    Route::patch('/mudurluks/{mudurluk}', 'Admin\Mudurluk\UpdateController')->name('mudurluk.update'); //select
//    Route::delete('/mudurluks/{mudurluk}', 'Admin\Mudurluk\DestroyController')->name('mudurluk.delete');

    Route::get('/rams', 'Admin\Ram\IndexController')->name('ram.index'); //select
    Route::get('/rams/create', 'Admin\Ram\CreateController')->name('ram.create'); //select
    Route::post('/rams', 'Admin\Ram\StoreController')->name('ram.store'); //select
    Route::get('/rams/{ram}', 'Admin\Ram\ShowController')->name('ram.show'); //select
//    Route::get('/rams/{ram}/edit', 'Admin\Ram\EditController')->name('ram.edit'); //select
//    Route::patch('/rams/{ram}', 'Admin\Ram\UpdateController')->name('ram.update'); //select
//    Route::delete('/rams/{ram}', 'Admin\Ram\DestroyController')->name('ram.delete');

    Route::get('/systems', 'Admin\System\IndexController')->name('system.index'); //select
    Route::get('/systems/create', 'Admin\System\CreateController')->name('system.create'); //select
    Route::post('/systems', 'Admin\System\StoreController')->name('system.store'); //select
    Route::get('/systems/{system}', 'Admin\System\ShowController')->name('system.show'); //select
//    Route::get('/systems/{system}/edit', 'Admin\System\EditController')->name('system.edit'); //select
//    Route::patch('/systems/{system}', 'Admin\System\UpdateController')->name('system.update'); //select
//    Route::delete('/systems/{system}', 'Admin\System\DestroyController')->name('system.delete');


});

Route::group(['namespace' => 'App\Http\Controllers\User', 'prefix' => 'user', 'middleware' => 'auth', 'verified'], function () {
//    Route::get('/posts/create', 'Post\CreateController')->name('post.create');
//    Route::post('/posts', 'Post\StoreController')->name('post.store');
//    Route::get('/posts/{post}', 'Post\ShowController')->name('post.show');

    Route::get('/servers', 'Server\IndexController')->name('server.index');
    Route::get('/servers/create', 'Server\CreateController')->name('server.create');
    Route::post('/servers', 'Server\StoreController')->name('server.store');
    Route::get('/servers/{post}', 'Server\ShowController')->name('server.show');

    //yeni eklenenler
    Route::resource('/Post', 'Post\PostController');
    //Route::resource('/Profile', 'Profile\ProfileController');

});


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
require __DIR__ . '/auth.php';
