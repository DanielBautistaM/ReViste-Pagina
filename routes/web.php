<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'Index')->name('home');
});

Route::controller(ClientController::class)->group(function () {
    Route::get('/category/{id}/{slug}', 'CategoryPage')->name('category');
    Route::get('/product-details/{id}/{slug}', 'SingleProduct')->name('singleproduct');
    Route::get('/add-to-cart', 'AddToCart')->name('addtocart');
    Route::get('/checkout', 'Checkout')->name('checkout');
    Route::get('/user-profile', 'UserProfile')->name('userprofile');
    Route::get('/new-release', 'NewRelease')->name('newrelease');
    Route::get('/todays-deal', 'TodaysDeal')->name('todaysdeal');
    Route::get('/custom-service', 'CustomerService')->name('customerservice');
});


Route::middleware(['auth', 'role:user'])->group(function () {
    Route::controller(ClientController::class)->group(function () {
        Route::post('/add-to-cart', 'AddToCart')->name('addtocart');
        Route::post('/add-product-to-cart', 'AddProductToCart')->name('addproducttocart');
        Route::get('/shipping-address', 'GetShippingAddress')->name('shippingaddress');
        Route::post('/add-shipping-address', 'AddShippingAddress')->name('addshippingaddress');
        Route::post('/place-order', 'PlaceOrder')->name('placeorder');
        Route::get('/checkout', 'Checkout')->name('checkout');
        Route::get('/user-profile', 'UserProfile')->name('userprofile');
        Route::get('/user-profile/pending-orders', 'PendingOrders')->name('pendingorders');
        Route::get('/user-profile/history', 'History')->name('history');
        Route::get('/todays-deal', 'TodaysDeal')->name('todaysdeal');
        Route::get('/custom-service', 'CustomerService')->name('customerservice');
        Route::get('/remove-cart-item/{id}', 'RemoveCartItem')->name('removeitem');
    });

});

Route::middleware(['auth', 'role:user', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/logout', function () {
        auth()->logout();
        
        return redirect('/')->with('success', '¡Cierre de Sesión Exitoso!');;
    })->name('logout');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

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
            Route::get('/editsubcategory/{id}', [SubcategoryController::class, 'EditSubCat'])->name('editsubcat');
            Route::get('/deletesubcategory/{id}', [SubcategoryController::class, 'DeleteSubCat'])->name('delitsubcat');
            Route::post('/updatesubcategory', [SubcategoryController::class, 'UpdateSubCat'])->name('updatesubcat');
        });

        Route::prefix('product')->group(function () {
            Route::get('/all', [ProductController::class, 'index'])->name('allproduct');
            Route::get('/add', [ProductController::class, 'addProduct'])->name('addproduct');
            Route::post('/storeproduct', [ProductController::class, 'StoreProduct'])->name('storeproduct');
            Route::get('/edit-product-img/{id}', [ProductController::class, 'EditProductImg'])->name('editproductimg');
            Route::post('/update-product-img', [ProductController::class, 'UpdateProductImg'])->name('updateproductimg');
            Route::get('/edit-product/{id}', [ProductController::class, 'EditProduct'])->name('editproduct');
            Route::post('/update-product', [ProductController::class, 'UpdateProduct'])->name('updateproduct');
            Route::get('/delete-product/{id}', [ProductController::class, 'DeleteProduct'])->name('deleteproduct');

        });

        Route::prefix('order')->group(function () {
            Route::get('/pending', [OrderController::class, 'index'])->name('pendingorder');
            Route::get('/checked', [OrderController::class,'checkedorders'])->name('checkedorder');
            Route::get('/approve/{id}', [OrderController::class, 'approveOrder'])->name('approveorder');
            
        });
    });
});

require __DIR__ . '/auth.php';
