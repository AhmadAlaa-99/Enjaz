<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TenantsController as AdminTenantController;
use App\Http\Controllers\Admin\MainTenancesController as AdminMainTenancesController;
use App\Http\Controllers\Admin\ReportsController as ReportsController;
use App\Http\Controllers\Admin\SettingsController as SettingsController;


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

Route::get('/', function () {
    return view('home');
});
//Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/storage', function () {
    Artisan::call('storage:link');
});
Route::get('/clear', function() {
	$exitCode = Artisan::call('cache:clear');
	$exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('route:clear');
	$exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('view:clear');
    return 'All routes cache has just been removed';

});
//Admin
Route::group([
    'prefix'=>'Admin',
   // 'middleware'=>'auth|privateAdmin',
  ],function()
  { 
     Route::resource('/leases',\Admin\LeasesController::class);
     Route::get('/maintenances',[AdminMainTenancesController::class,'index'])->name('maintenances');
     Route::get('/maintenances_wait',[AdminMainTenancesController::class,'wait_request']);
     Route::get('/maintenances_refuse',[AdminMainTenancesController::class,'refuse_requests']);
     Route::get('/tenants',[AdminTenantController::class,'index']);
     Route::get('/archive_tenants',[AdminTenantController::class,'archive']);
     Route::get('/tn_payments',[AdminTenantController::class,'payments']);
     Route::resource('/owners',\Admin\OwnersController::class);
     Route::resource('/realties',\Admin\RealtiesController::class);
     Route::resource('/units',\Admin\UnitsController::class);
     Route::get('/profile',[profileController::class,'Admin'])->name('Admin_profile');

     Route::get('/contract_payments',[ReportsController::class,'contract_payments']);
     Route::get('/maintenance_payments',[ReportsController::class,'maintenance_payments']);
     Route::get('/rental_traffic',[ReportsController::class,'rental_traffic']);
     Route::get('/invoice_details',[ReportsController::class,'details']);
     Route::get('/effictive',[ReportsController::class,'effictive']);
     Route::get('/finished',[ReportsController::class,'finished']);
     Route::get('/payments_details',[ReportsController::class,'payments_details']);
     Route::get('/lease_details',[ReportsController::class,'lease_details']);
     Route::get('/maintenance_details',[ReportsController::class,'maintenance_details']);
    
     
     
     Route::get('/tasks',[SettingsController::class,'tasks']);
     Route::get('/settings',[SettingsController::class,'settings']);
     Route::get('/statistics',[SettingsController::class,'statistics']);
  });

  Route::group([
    'prefix'=>'Tenant',
   // 'middleware'=>'auth|privateAdmin',
  ],function()
  { 
     Route::get('/my_lease',[LeasesController::class,'my_lease'])->name('my_lease');
     Route::resource('/maintenances',MainTenancesController::class);
     Route::get('/my_units',[UnitsController::class,'show'])->name('my_units');
     Route::get('/records',[RecordController::class,'index'])->name('records');
     Route::get('/profile',[profileController::class,'Tenant'])->name('Tnant_profile');
  });

  Route::group([
    'prefix'=>'Owner',
   // 'middleware'=>'auth|privateAdmin',
  ],function()
  { 
    Route::get('/leases',[LeasesController::class,'index'])->name('leases');
    Route::get('/lease',[LeasesController::class,'show'])->name('lease');
    Route::get('/units',[UnitsController::class,'index'])->name('units');
    Route::get('/unit',[UnitsController::class,'show'])->name('unit');

  //  Route::get('/maintenances',[MainTenancesController::class,'index'])->name('maintenances');
   // Route::post('/accept',[MainTenancesController::class,'accept'])->name('maintenances');
   // Route::post('/refuse',[MainTenancesController::class,'refuse'])->name('maintenances');

  //  Route::get('/records',[RecordController::class,'index'])->name('records');
    
    Route::get('/profile',[profileController::class,'Owner'])->name('Owner_profile');
    
  });




