<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentManageController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BranchController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('delreg/{id}', [StudentManageController::class, 'delreg'])->name('delreg');
Route::get('editreg/{id}', [StudentManageController::class, 'editreg'])->name('editreg');

Route::get('registrassion', [StudentManageController::class, 'create'])->name('regis');
Route::get('sDetails', [StudentManageController::class, 'show'])->name('sDetails');

Route::post('/storeStd', [StudentManageController::class, 'storeStd'])->name('storeStd');
Route::post('/uppStd', [StudentManageController::class, 'uppStd'])->name('uppStd');

Route::get('/viewCorPage', [CourseController::class, 'viewCorPage'])->name('viewCorPage');
Route::get('/addCorPage', [CourseController::class, 'addCorPage'])->name('addCorPage');
Route::get('/delCourse/{id}', [CourseController::class, 'delCourse'])->name('delCourse');
Route::post('/addCor', [CourseController::class, 'addCor'])->name('addCor');
Route::post('/uppCor', [CourseController::class, 'uppCor'])->name('uppCor');
Route::get('/editCourse/{id}', [CourseController::class, 'editCourse'])->name('editCourse');

Route::get('/viewBrPage', [BranchController::class, 'viewBrPage'])->name('viewBrPage');
Route::get('/addBrPage', [BranchController::class, 'addBrPage'])->name('addBrPage');
Route::get('/delBranch/{id}', [BranchController::class, 'delBranch'])->name('delBranch');
Route::get('/editBranch/{id}', [BranchController::class, 'editBranch'])->name('editBranch');
Route::post('/uppBr', [BranchController::class, 'uppBr'])->name('uppBr');
Route::post('/addBr', [BranchController::class, 'addBr'])->name('addBr');



Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');
