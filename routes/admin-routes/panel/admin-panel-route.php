<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
*/

Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-z]{2}'],
], function () {
    
    Route::prefix('admin')->group(function(){
        Route::get('/dashboard', [App\Http\Controllers\AdminControllers\Dashboard\DashboardController::class, 'dashboard'])->name('admin.dashboard');
        
        Route::resources([
            '/{categoryType}/category' => App\Http\Controllers\AdminControllers\Category\CategoryController::class,
            '/{sectionType}/section' => App\Http\Controllers\AdminControllers\Section\SectionController::class,
            '/message' => App\Http\Controllers\AdminControllers\Message\MessageController::class,
            '/text' => App\Http\Controllers\AdminControllers\Text\TextController::class,
            '/standart' => App\Http\Controllers\AdminControllers\Standart\StandartController::class,
            '/news' => App\Http\Controllers\AdminControllers\News\NewsController::class,
            '/admin' => App\Http\Controllers\AdminControllers\Admin\AdminController::class,
            '/role' => App\Http\Controllers\AdminControllers\Role\RoleController::class,
            '/permission' => App\Http\Controllers\AdminControllers\Permission\PermissionController::class,
            '/user' => App\Http\Controllers\AdminControllers\User\UserController::class,
            '/cart' => App\Http\Controllers\AdminControllers\Cart\CartController::class,
            '/application' => App\Http\Controllers\AdminControllers\Application\ApplicationController::class,
        ]);
    });
});