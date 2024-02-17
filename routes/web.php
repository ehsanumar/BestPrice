<?php

use App\Http\Controllers\CompanyPriceController;
use App\Http\Controllers\CompanyProductesController;
use App\Http\Controllers\PharmacyRequestController;
use App\Models\CompanyProductes;
use App\Models\pharmacyRequest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestMedicinePharmacyController;
use App\Http\Controllers\SortAndSearchController;
use App\Http\Controllers\SortAndSearchRequestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/productes',[CompanyProductesController::class,'Productes'])->name('productes');
Route::get('/product/{id}',[CompanyProductesController::class,'ProductesDetails'])->name('productesDetails');

Route::get('/requests',[PharmacyRequestController::class,'requestes'])->name('requestes');
Route::get('/request/{id}',[PharmacyRequestController::class,'RequestDetails'])->name('request.Details');

Route::group(['middleware' => ['role:super-admin' ,'auth']], function () {
    Route::resource('user', UserController::class)->only('index','update','destroy','company');
    Route::get('company/users',[UserController::class,'company'])->name('company.users');
    Route::get('pharmacy/users',[UserController::class,'pharmacy'])->name('pharmacy.users');
});
Route::group(['middleware' => ['role:company|super-admin', 'auth']], function () {
    Route::resource('company', CompanyProductesController::class)->only('store', 'destroy','index');
});
Route::group(['middleware' => ['role:pharmacy|super-admin', 'auth']], function () {
    Route::resource('pharmacy', PharmacyRequestController::class)->only('store','update', 'destroy','index');
});

Route::get('/dashboard', function () {
$companyProductesSpecific=CompanyProductes::where('company_id',auth()->id())->latest()->get();
$pharmacyRequestSpecific=pharmacyRequest::where('pharmacy_id',auth()->id())->latest()->get();
    return view('dashboard',compact([
        'companyProductesSpecific',
        'pharmacyRequestSpecific',
    ]));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('comment',RequestMedicinePharmacyController::class);
    Route::resource('feedback',CompanyPriceController::class);
});
Route::get('/search/product',[SortAndSearchController::class,'searchProduct'])->name('searchProduct');
Route::get('/sort/product',[SortAndSearchController::class,'sortProduct'])->name('sortProduct');

Route::get('/search/request',[SortAndSearchRequestController::class,'searchRequest'])->name('searchRequest');
Route::get('/sort/request',[SortAndSearchRequestController::class,'sortRequest'])->name('sortRequest');

require __DIR__.'/auth.php';
