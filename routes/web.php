<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\TutionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TLoginController;

use App\Http\Controllers\backend\DivisionController;
use App\Http\Controllers\backend\DistrictController;
use App\Http\Controllers\backend\UpozilaController;



use App\Http\Controllers\AddressController;




Route::get('/student', function () {
    return view('login');

    

    

   
});



    

   
Route::get('/teacher', function () {
    return view('login2');

    

   
});



Route::get('/', [TutionController::class, 'home']) ->name('home');
Route::get('/register-student', [TutionController::class, 'register_student'])->name('register-student');
Route::post('/register-student', [TutionController::class, 'datasave'])->name('datasave');


Route::get('/register-teacher', [TutionController::class, 'register_teacher'])->name('register-teacher');
Route::post('/register-teacher', [TutionController::class, 'datasave_teacher'])->name('datasave_teacher');


Route::get('/Find-student', [TutionController::class, 'StudentList'])->name('Find-student');

Route::get('/Find-teacher', [TutionController::class, 'TeacherList'])->name('Find-teacher');







Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/login2', [TLoginController::class, 'login2'])->name('login2');
Route::get('/login2', [TLoginController::class, 'login2'])->name('login2');

Route::post('/update', [LoginController::class, 'update'])->name('update');

Route::post('/updateTeacher', [TLoginController::class, 'updateTeacher'])->name('updateTeacher');

Route::get('/delete-user', [LoginController::class, 'Delete'])->name('delete-user');
Route::get('/delete-teacher', [TLoginController::class, 'DeleteTeacher'])->name('delete-teacher');


//oute::resource('divisions/create', 'DivisionController');

Route::get('/divisions/create', [DivisionController::class, 'create'])->name('divisions/create');
Route::post('/divisions/create', [DivisionController::class, 'store'])->name('store');

Route::get('/districts/create', [DistrictController::class, 'create'])->name('districts/create');
Route::post('/districts/create', [DistrictController::class, 'store'])->name('store');

Route::get('/upozilas/create', [UpozilaController::class, 'create'])->name('upozilas/create');

Route::get('/adress', [AdressController::class, 'view'])->name('address');



//Route::get('divisions/create', 'App\Http\Controllers\Backend\DivisionController@create');
//Route::post('divisions/store', 'App\Http\Controllers\Backend\DivisionController@store');


//Route::resource('divisions', Backend/DivisionController::class);

//Route::resource('divisions','Backend\DivisionController');

//Route::get('/divisions', [DivisionsController::class, 'create']);

//Route::get('districts/create', 'App\Http\Controllers\Backend\DistrictsController@create');
//Route::get('upazilas/create', 'App\Http\Controllers\Backend\UpozilaController@create');





Route::get('/json-districts','AddressController@district');
Route::get('/json-upazila','AddressController@upazila');





























