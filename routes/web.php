<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Front\FrontPageController;
use App\Http\Controllers\Front\CompanyController;
use App\Http\Controllers\VacancyController;


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


\Debugbar::enable();
// \Debugbar::disable();

Route::get('/', fn() => redirect()->route('front.index'));

Route::group(['middleware' => ['auth'] ], function() {

    Route::get('admin/home', [PageController::class, 'index'])->name('admin.index');

    Route::group(['prefix' => 'admin/pages'], function() {

        Route::get('search', [PageController::class, 'search'])
                ->name('admin.pages.search.index');

        Route::get('category/create', [PageController::class, 'category'])
                ->name('admin.pages.category.index');

        Route::get('companies', [PageController::class, 'company'])
                ->name('admin.pages.company.index');

        Route::delete('company/delete/{company_id}', [PageController::class, 'destroy_company']);

        Route::get('vacancy', [PageController::class, 'vacancy'])
                ->name('admin.pages.vacancy.index');

        Route::delete('vacancy/delete/{vacancy_id}', [VacancyController::class, 'destroy']);

        Route::get('vacancy/update/{vacancy_id}', [VacancyController::class, 'edit'])
                ->name('admin.pages.vacancy.edit');

        Route::put('vacancy/update/{vacancy_id}', [VacancyController::class, 'update']);

        Route::get('payment', [PaymentController::class, 'index'])
                ->name('admin.pages.payment.index');

        Route::put('payment/change/status/{payment_id}', [PaymentController::class, 'update']);

        Route::get('invoices', [InvoiceController::class, 'index'])
                ->name('admin.pages.invoice.index');

        Route::post('/send/invoice/{vacancy_id}', [InvoiceController::class, 'store']);

    });
});
        

        Route::get('vacancy', [FrontPageController::class, 'index'])
                ->name('front.index');

        Route::get('view/{vacancy_id}/{name}', [FrontPageController::class, 'show'])
                ->middleware('countingVacancyView')
                ->name('front.show.index');

        Route::get('location/{location_id}/{name}', [FrontPageController::class, 'location'])
                ->name('front.location.index');

        Route::get('company/{company_id}/{name}', [FrontPageController::class, 'company'])
                ->name('front.company.index');

        Route::get('category/{category_id}/{name}', [FrontPageController::class, 'category'])
                ->name('front.category.index');

        Route::get('filter', [FrontPageController::class, 'filter'])
                    ->name('front.filter.index');


    Route::group(['middleware' => 'auth:company', 'prefix' => 'account/company'], function() {
        
        Route::get('home', [CompanyController::class, 'index'])
                ->name('front.account.index');

        Route::get('vacancy/create', [CompanyController::class, 'create'])
                ->name('front.account.create');
        
        Route::post('vacancy/store', [VacancyController::class, 'store']);

        Route::get('profile/edit', [CompanyController::class, 'edit_profile'])
                ->name('front.account.update.profile');

        Route::get('vacancy/order/{order_id}', [CompanyController::class, 'show'])
                ->name('front.account.order.index');
        
        Route::get('vacancy/my/history', [CompanyController::class, 'vacancy_history'])
                ->name('front.account.history.index');

        Route::put('profile/update/{id}', [CompanyController::class, 'update_profile']);
        
    });

    Route::group(['prefix' => 'account/company'], function() {
        Route::get('/register', [RegisterController::class, 'register_company'])->name('company.register');
        Route::get('/signin', [LoginController::class, 'login_company'])->name('company.login');
        Route::post('/logout', [LoginController::class, 'logoutCompanyUser']);
        Route::post('/login/user', [LoginController::class, 'loginCompanyUser']);
        Route::post('/create', [RegisterController::class, 'createCompanyUser']);
    });

Auth::routes();
