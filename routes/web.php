<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\UserInfoController;

/*

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
    return view('auth.login');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/taskReminder', [App\Http\Controllers\HomeController::class, 'taskReminder'])->name('taskReminder');

Route::get('task/downloaded/{id}', [TaskController::class, 'downloaded'])->name('downloaded');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', UserController::class);
    Route::get('createuserinfo/{id}', [UserInfoController::class, 'create'])->name('create');
    Route::post('userinfo/{id}', [UserInfoController::class, 'store'])->name('store');
    Route::post('updateuserinfo/{id}', [UserInfoController::class, 'update'])->name('update');


    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('attendance', AttendanceController::class);
    Route::resource('Feed', FeedController::class);
    Route::resource('leave', LeaveController::class);
    Route::resource('payroll', PayrollController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('task', TaskController::class);


    Route::get('full-calender', [FullCalenderController::class, 'index'])->name('calender');
    Route::post('full-calender/action', [FullCalenderController::class, 'action']);
});
