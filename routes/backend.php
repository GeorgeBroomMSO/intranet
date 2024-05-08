<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\Backend\DashboardController;


Route::prefix('backend')->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('backend.dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('backend.profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('backend.profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('backend.profile.destroy');

        //companies
        Route::get('/companies', [CompanyController::class, 'show'])->name('backend.company.list');
        Route::get('/company/add', [CompanyController::class, 'add'])->name('backend.company.add');
        Route::post('/company/add', [CompanyController::class, 'add'])->name('backend.company.add');

        /*Route::get('company/{id}', function ($id) {
          return 'Company '.$id;
        });*/

        Route::get('/company/{id}',[CompanyController::class, 'single'])->name('backend.company.single');

        //contacts
        Route::get('/contacts', [ContactController::class, 'show'])->name('backend.contact.list');
        Route::get('/contact/add', [ContactController::class, 'add'])->name('backend.contact.add');
        Route::post('/contact/add', [ContactController::class, 'add'])->name('backend.contact.add');

        //Staff
        Route::get('/staff', [StaffController::class, 'show'])->name('backend.staff.list');
        Route::get('/staff/add', [StaffController::class, 'add'])->name('backend.staff.add');
        Route::post('/staff/add', [StaffController::class, 'add'])->name('backend.staff.add');

        //Projects
        Route::get('/projects', [ProjectController::class, 'show'])->name('backend.project.list');
        Route::get('/project/add', [ProjectController::class, 'add'])->name('backend.project.add');
        Route::post('/project/add', [ProjectController::class, 'add'])->name('backend.project.add');

        //Budgets
        Route::get('/budgets', [BudgetController::class, 'show'])->name('backend.budget.list');
        Route::get('/budget/add', [BudgetController::class, 'add'])->name('backend.budget.add');
        Route::post('/budget/add', [BudgetController::class, 'add'])->name('backend.budget.add');

        //Tasks
        Route::get('/tasks', [TaskController::class, 'show'])->name('backend.task.list');
        Route::get('/task/add', [TaskController::class, 'add'])->name('backend.task.add');
        Route::post('/task/add', [TaskController::class, 'add'])->name('backend.task.add');
  
    });
});
