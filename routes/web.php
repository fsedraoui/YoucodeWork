<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Sessi;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\JobController;

\Carbon\Carbon::setLocale('fr');   
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
/*****************ADMIN ROUTES*******************/
Route::Group(['prefix' => 'admin'], function () { 
    Route::get('/index_admin', function () {
        return view('admin.index_admin');
    })->name('index_admin');
    Route::get('/categories', function () {
        return view('admin.categories');
    })->name('categories');
   // Route::get('/projects', function () { return view('admin.projects');})->name('projects');
    
    Route::get('/projectsAdmin', [InstructorController::class, 'projectsByInstructor'])->middleware(['auth'])->name('projectsAdmin');
    Route::get('/users', function () { return view('admin.users'); })->name('users');
    Route::get('/providers', function () {
        return view('admin.providers');
    })->name('providers');
    Route::get('/settings', function () {
        return view('admin.settings');
    })->name('settings');
    });

Route::get('/flush', function(){
    Session::flush();
});
Route::get('/index', function () {
    return view('index');
})->name('pagee');
Route::get('/', function () {
    return view('index');
    })->name('home');   
    
Route::get('/redirectafterlogin', [StudentController::class, 'Role'])->middleware(['auth'])->name('redirectafterlogin');

    
Route::get('/dashboard', [StudentController::class, 'DashboardApprenant'])->middleware(['auth'])->name('dashboard');

/*Route::get('/dashboard', function () {
    if(Auth::user()->role == 'recruiter'){
        return view('dashboard');
    } else if(Auth::user()->role == 'student'){
        return view('dashboard');
    }

})->middleware(['auth'])->name('dashboard');*/


Route::get('/view-jobs', [JobController::class, 'allJobs'])->middleware(['auth'])->name('view-jobs');
Route::get('/post-job', function () {return view('post-job');})->name('post-job');
Route::get('/apprenant-dashboard', function () {return view('apprenant-dashboard');})->name('apprenant-dashboard');
Route::get('/manage-projects', function () { return view('manage-projects');})->name('manage-projects');

Route::get('/apprenant-projetsvalides', [StudentController::class, 'projetByStudent'])->middleware(['auth'])->name('apprenant-projetsvalides');
//Route::get('/freelancer-project-proposals', [ProjectController::class, 'allProjects'])->middleware(['auth'])->name('freelancer-project-proposals');
Route::get('/post-project', [ProjectController::class, 'create'])->middleware(['auth'])->name('post-project');
Route::post('/post-project', [ProjectController::class, 'store'])->middleware(['auth'])->name('store-project');
Route::get('/project-details/{projectId}', [ProjectController::class, 'projectById'])->middleware(['auth'])->name('project-details');
Route::get('/projects', [ProjectController::class, 'allProjects'])->middleware(['auth'])->name('projects');
Route::post('/projects', [ProjectController::class, 'allProjects'])->middleware(['auth'])->name('projects');
Route::get('/projects/{technology}', [ProjectController::class, 'projectsByTechnology'])->middleware(['auth'])->name('projects-by-technology');
// routes for job
Route::get('/post-job', function () {return view('post-job');})->name('post-job');
Route::post('/store-job', [JobController::class,'store'])->name('store-job');
Route::get('/freelancer-dashboard', function () {
    return view('freelancer-dashboard');
})->name('freelancer-dashboard');
//Route::get('/freelancer-project-proposals', function () { return view('freelancer-project-proposals');})->name('freelancer-project-proposals');
require __DIR__.'/auth.php';

Route::get('/projectsbystudent', [StudentController::class, 'ProjectBystudent'])->name('projectsbystudent');