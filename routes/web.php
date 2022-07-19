<?php

namespace App\Http\Controllers;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth'])->name('dashboard.index');

    // Fontend Controller Routes
    Route::get('/', [FrontendController::class, 'index'])->name('index');
    Route::get('our-review', [FrontendController::class, 'review'])->name('reviewpage');


    // Route::resources([
    //     'addproperty' => 'AddPropertyController',
    // ]);


    // Dashboard Routes
    Route::group(
        ['namespace' => 'User', 'middleware' => 'auth'],
        function () {
            Route::get('dashboard', 'UserDashboardController@index')->name('dashboard.index');
            Route::get('user/logout', 'UserDashboardController@logout')->name('user.logout');

            // 6 Game page
            Route::get('oddeven/{id}', [FrontendController::class, 'oddeven'])->name('oddeven');
            Route::get('ludo/{id}', [FrontendController::class, 'ludo'])->name('ludo');
            Route::get('headtail/{id}', [FrontendController::class, 'headtail'])->name('headtail');
            Route::get('spin/{id}', [FrontendController::class, 'spin'])->name('spin');
            Route::get('teenpaty/{id}', [FrontendController::class, 'teenpaty'])->name('teenpaty');
            Route::get('tomjare/{id}', [FrontendController::class, 'tomjare'])->name('tomjare');

            Route::get('user-deposit', 'UserDashboardController@deposit')->name('deposit');
            Route::post('user-deposit-submit', 'UserDashboardController@deposit_submit')->name('deposit.submit');
            Route::get('user-withdrow', 'UserDashboardController@withdrow')->name('withdrow');
            Route::post('user-withdrow-submit', 'UserDashboardController@withdrow_submit')->name('withdrow.submit');
            Route::get('user-statement', 'UserDashboardController@statement')->name('statement');

            Route::get('user/profile', 'UserProfileController@index')->name('user.profile');
            Route::get('user/profile/edit', 'UserProfileController@edit')->name('user.profile.edit');
            Route::post('user/profile/update', 'UserProfileController@update')->name('user.profile.update');
            Route::get('user/setting', 'UserProfileController@setting')->name('user.setting');
            Route::post('user/setting/update', 'UserProfileController@changepassword')->name('user.setting.update');
        }
    );


    // Admin panel Routes
    Route::group(['namespace' => 'Admin', 'middleware' => 'admin'], function () {

        Route::get('admin/dashboard', 'DashboardController@index')->name('admin.index');

        Route::resources([
            'categories' => 'CategoryController',
            'users' => 'UserController',
            'review' => 'ReviewController',
            'deposit' => 'DepositController',
            'withdrow' => 'WithdrowController',
            'newarrivals' => 'NewArrivalsController',
            'admin/visitor/querstion' => 'VisitorQueryController',
        ]);

        Route::get('admin/settings', 'SettingController@index')->name('setting.index');
        Route::post('admin/settings/update', 'SettingController@setting_update')->name('setting.update');

        Route::get('admin/profile', 'ProfileController@index')->name('admin.user.profile');
        Route::get('admin/profile/edit', 'ProfileController@edit')->name('admin.user.profile.edit');
        Route::post('admin/profile/update', 'ProfileController@update')->name('admin.user.profile.update');
        Route::get('admin/setting', 'ProfileController@setting')->name('admin.user.setting');
        Route::post('admin/setting/update', 'ProfileController@changepassword')->name('admin.user.setting.update');
    });





require __DIR__.'/auth.php';
