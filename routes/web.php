<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('Employee', [EmployeeController::class,'list'])->name('employee.list');


Route::get('employee/add',[EmployeeController::class,'add'])->name('employee.add');


Route::post('employee',[EmployeeController::class,'store'])->name('employee.store');


Route::get('employee/{id}/edit',[EmployeeController::class,'edit'])->name('employee.edit');

Route::delete('employee/{id}',[EmployeeController::class,'destroy'])->name('employee.destroy');


Route::put('employee/{id}',[EmployeeController::class,'update'])->name('employee.update');

