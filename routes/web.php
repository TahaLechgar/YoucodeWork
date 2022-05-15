<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StudentController;
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
Route::get('/index', function () {
    return view('index');
})->name('pagee');
Route::get('/', function () {
    return view('index');
    })->name('home');

Route::get('/dashboard', [StudentController::class, 'Role'])->middleware(['auth'])->name('dashboard');
Route::get('/pending-projects', [StudentController::class, 'studentPendingProjects'])->middleware(['auth'])->name('pending-projects');
Route::get('/accepted-projects', [StudentController::class, 'studentAcceptedProjects'])->middleware(['auth'])->name('accepted-projects');
Route::get('/all-projects', [StudentController::class, 'studentAllProject'])->middleware(['auth'])->name('all-projects');

/*Route::get('/dashboard', function () {
    if(Auth::user()->role == 'recruiter'){
        return view('dashboard');
    } else if(Auth::user()->role == 'student'){
        return view('dashboard');
    }

})->middleware(['auth'])->name('dashboard');*/


Route::get('/post-project', function () {return view('post-project');})->name('post-project');
Route::get('/apprenant-dashboard', function () {return view('apprenant-dashboard');})->name('apprenant-dashboard');
//Route::get('/manage-projects', function () { return view('manage-projects');})->name('manage-projects');
//Route::get('/freelancer-project-proposals', [ProjectController::class, 'allProjects'])->middleware(['auth'])->name('freelancer-project-proposals');
Route::post('/post-project', [ProjectController::class, 'store'])->middleware(['auth'])->name('store-project');
Route::get('/project-details/{projectId}', [ProjectController::class, 'projectById'])->middleware(['auth'])->name('project-details');
Route::get('/projects', [ProjectController::class, 'allProjects'])->middleware(['auth'])->name('projects');
Route::get('/projects/{technology}', [ProjectController::class, 'projectsByTechnology'])->middleware(['auth'])->name('projects-by-technology');
Route::get('/freelancer-project-proposals', function () {return view('freelancer-project-proposals');})->name('freelancer-project-proposals');

Route::get('/freelancer-dashboard', function () {
    return view('freelancer-dashboard');
})->name('freelancer-dashboard');
//Route::get('/freelancer-project-proposals', function () { return view('freelancer-project-proposals');})->name('freelancer-project-proposals');
require __DIR__.'/auth.php';

Route::get('/projectsbystudent', [StudentController::class, 'ProjectBystudent'])->name('projectsbystudent');
