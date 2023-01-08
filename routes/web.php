<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employeecontroller;

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

Route::get('/', [Employeecontroller::class, 'insertform']);
Route::post('Create', [Employeecontroller::class, 'insert']);
Route::get('view', [Employeecontroller::class,'employee_list']);
Route::get('edit/{id}', [Employeecontroller::class, 'edit']);
Route::post('Update', [Employeecontroller::class, 'update']);
Route::get('delete/{id}', [Employeecontroller::class, 'delete']);
