<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CourseController;

Route::get('/',[CourseController::class,'all_course'])->name('all.course');
Route::get('/add-new-student',[CourseController::class,'add_new_student'])->name('add.student');
Route::post('/store-student',[CourseController::class,'store_student'])->name('store.student');
Route::get('/edit-student/{id}',[CourseController::class,'edit_student'])->name('edit.student');
Route::post('/update-student/{id}',[CourseController::class,'update_student'])->name('update.student');
Route::get('/delete-student/{id}',[CourseController::class,'delete_student'])->name('delete.student');
