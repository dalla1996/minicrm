<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\company;
use App\Models\employee;

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
    return view('index');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/company', function () {
    $data=company::paginate(10);

    return view('company')->with('details',$data);
});
Route::get('/employee', function () {
    $data=employee::paginate(10);
    //dd($data);
    return view('employee')->with('details',$data);
});

Route::get('/addemployee', function () {
    return view('employee_reg');
});
Route::get('/addcompany', function () {
    return view('company_reg');
});

Route::post('/insertcompany','CompanyController@store');
Route::post('/insertemployee','EmployeeController@store');
Route::get('/deleteemployee/{id}','EmployeeController@destroy');
Route::get('/deletecompany/{id}','CompanyController@destroy');
Route::get('/updatecompany/{id}','CompanyController@edit');
Route::post('/updatecompanyinfo','CompanyController@update');
Route::get('/updateemployee/{id}','EmployeeController@edit');
Route::post('/updateemployeeinfo','EmployeeController@update');




