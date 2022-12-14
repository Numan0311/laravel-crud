<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Get All Employee
Route::get('employees','App\Http\Controllers\EmployeeController@getEmployee');

// Get Specific Employee
Route::get('employees/{id}','App\Http\Controllers\EmployeeController@getEmployeeById');

// Add Employee
Route::post('employees/add','App\Http\Controllers\EmployeeController@addEmployee');

// Update Employee
Route::put('employees/update/{id}','App\Http\Controllers\EmployeeController@updateEmployee');

// Delete Employee
Route::delete('employees/delete/{id}','App\Http\Controllers\EmployeeController@deleteEmployee');
