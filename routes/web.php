<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'role:user', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admindashboard');

        Route::prefix('category')->group(function () {
            Route::get('/all', [CategoryController::class, 'index'])->name('allcategory');
            Route::get('/add', [CategoryController::class, 'addCategory'])->name('addcategory');
            Route::post('/store', [CategoryController::class, 'store'])->name('storecategory');
            Route::get('/editcategory/{id}', [CategoryController::class, 'EditCategory'])->name('editcategory');
            Route::post('/updatecategory', [CategoryController::class, 'UptadeCategory'])->name('updatecategory');
            Route::get('/deletecategory/{id}', [CategoryController::class, 'DeleteCategory'])->name('deletecategory');
        });

        Route::prefix('subcategory')->group(function () {
            Route::get('/all', [SubcategoryController::class, 'index'])->name('allsubcategory');
            Route::get('/add', [SubcategoryController::class, 'addSubCategory'])->name('addsubcategory');
            Route::post('/store-subcategory', [SubcategoryController::class, 'storeSubcategory'])->name('storesubcategory');
        });

        Route::prefix('product')->group(function () {
            Route::get('/all', [ProductController::class, 'index'])->name('allproduct');
            Route::get('/add', [ProductController::class, 'addProduct'])->name('addproduct');
        });

        Route::prefix('order')->group(function () {
            Route::get('/pending', [OrderController::class, 'index'])->name('pendingorders');
        });
    });
});

require __DIR__ . '/auth.php';
