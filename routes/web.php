<?php

use App\Http\Controllers\Admin\UsersController;
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

require __DIR__.'/auth.php';

(new class() {
    public function __construct()
    {
        Route::get('/', function () {
            return view('welcome');
        });
       
        Route::middleware(['auth'])->group(function () {
            Route::middleware(['web.users.accounts'])->group(function () {
                $this->registerUserRoutes();
            });
            Route::middleware(['web.admins.accounts'])->group(function () {
                Route::prefix('admin')->group(function () {
                    $this->registerAdminRoutes();
                });
            });

        });
    }

    private function registerUserRoutes()
    {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    }

    private function registerAdminRoutes()
    {
        Route::get('/dashboard', function () {
            return view('/admin/dashboard');
        })->name('admin.dashboard');
        
        //Users CRUD
        Route::get('/users', [UsersController::class, 'index'])
               ->name('admin.users.index');
        Route::get('/users/create', [UsersController::class, 'create'])
               ->name('admin.users.create');
        Route::post('/users/store', [UsersController::class, 'store'])
               ->name('admin.users.store');

    }
});
