<?php

use App\Http\Middleware\UserLogin;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('localization/{local}', function ($local) {
    Session::put('local', $local);
    return back();
});
Route::get('/', App\Livewire\Admin\LoginComponent::class)->name('admin.login');
Route::group(['middleware' => 'user_login'], function () {
    Route::post('/logout', App\Livewire\Admin\LoginComponent::class, 'logout')->name('admin.logout');
    Route::get('/dashboard', App\Livewire\Admin\DashboardComponent::class)->name('admin.dashboard');
    Route::get('/manage-basic-information', App\Livewire\Admin\ManageBasic\ManageBasicInfromatComponent::class)->name('admin.manage_basic_formation');
    Route::get('/burk-pays-water-payment', App\Livewire\Admin\ModulBurkPayWater\BurkPaysWaterPaymentComponent::class)->name('admin.burk_pay_water_payment');
    Route::get('/sell-factory-page', App\Livewire\Admin\SellFactoryPage\SellFactoryPageComponent::class)->name('admin.sell_factory_page');
    Route::get('/expenses', App\Livewire\Admin\Expenses\ExpenseComponent::class)->name('admin.expense');
    // settings
    Route::get('/manage-user-page', App\Livewire\Admin\Settings\ManageUserPageComponent::class)->name('admin.manage_user_page');
    Route::get('/manage-rigths', App\Livewire\Admin\Settings\ManageRigthsComponent::class)->name('admin.manage_rigth');
    Route::get('/users', App\Livewire\Admin\Settings\UserComponent::class)->name('admin.user');
    Route::get('/define-user-right', App\Livewire\Admin\Settings\DefineUserRigthComponent::class)->name('admin.define_user_right');
});
