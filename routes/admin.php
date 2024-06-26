<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/**
 * Admin Site Router
 */
if(function_exists('admin_prefix')) {
    $prefix = admin_prefix();

    Route::middleware(['web','auth', 'admin'])
    ->name('admin.shop')
    ->prefix($prefix.'/shop')->group(function () {

        ## 설정
        Route::get('setting', [
            \Jiny\Shop\Http\Controllers\Admin\AdminSettingController::class,"index"]);


        // 사이트 데쉬보드
        Route::get('/', [
            \Jiny\Shop\Http\Controllers\Admin\AdminShopDashboard::class,
            "index"]);

    });
}
