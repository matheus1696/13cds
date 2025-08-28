<?php

use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Student\ReflectionController;
use App\Http\Controllers\Student\ExerciseController;
use App\Http\Controllers\Account\ProfileController;
use App\Http\Controllers\Admin\Profession\ProfessionController;
use App\Http\Controllers\Admin\Student\ExerciseAdminController;
use App\Http\Controllers\Admin\Student\PresentialActivityController;
use App\Http\Controllers\Admin\Student\ReflectionAdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Evaluation\EvaluationAnswerController;
use App\Http\Controllers\Evaluation\EvaluationController;
use App\Http\Controllers\Tutor\EvaluationCourseController;
use App\Http\Controllers\Tutor\ExerciseEvaluationController;
use App\Http\Controllers\Tutor\ReflectionEvaluationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('home'); })->name('home');
Route::get('/dashboard', function () {return redirect(route('dashboard.index')); })->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('portal')->group(function () {

        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::get('schedule', function () { return view('portal/general/schedule'); })->name('schedule');
        Route::get('about', function () { return view('portal/general/about'); })->name('about');
        Route::get('notifications', function () { return view('portal/general/notifications'); })->name('notifications');
    
        Route::get('/profile', [ProfileController::class, 'editProfile'])->name('profile.editProfile');
        Route::patch('/profile', [ProfileController::class, 'updateProfile'])->name('profile.updateProfile');
        Route::get('/profile/password', [ProfileController::class, 'editPassword'])->name('profile.editPassword');

        Route::middleware('can:user_students')->group(function () {

            Route::get('students/books/recomendations', function () { return view('portal/students/book-recommendations'); })->name('book-recommendations');

            Route::get('students/reflections', [ReflectionController::class, 'index'])->name('reflections.index');
            Route::get('students/reflection/{reflection}/create', [ReflectionController::class, 'create'])->name('reflections.create');
            Route::post('students/reflection/{reflection}/store', [ReflectionController::class, 'store'])->name('reflections.store');
            Route::get('students/reflection/{reflection}/show', [ReflectionController::class, 'show'])->name('reflections.show');
        
            Route::get('students/exercises', [ExerciseController::class, 'index'])->name('exercises.index');
            Route::get('students/exercise/{exercise}/create', [ExerciseController::class, 'create'])->name('exercises.create');
            Route::post('students/exercise/{exercise}/store', [ExerciseController::class, 'store'])->name('exercises.store');
            Route::get('students/exercise/{exercise}/show', [ExerciseController::class, 'show'])->name('exercises.show');
            
            Route::get('evaluation/{evaluation}/create', [EvaluationAnswerController::class, 'create'])->name('evaluation_answers.create');
            Route::post('evaluation/{evaluation}/store', [EvaluationAnswerController::class, 'store'])->name('evaluation_answers.store');
        });
        
        Route::middleware('can:configuration_users')->group(function () {
            Route::get('configuration/users', [UserController::class, 'index'])->name('users.index');
            Route::get('configuration/user/create', [UserController::class, 'create'])->name('users.create');
            Route::post('configuration/user/store', [UserController::class, 'store'])->name('users.store');
            Route::put('onfiguration/users/permission/{user}',[UserController::class,'permission'])->name('users.permission');
        });

        Route::middleware('can:configuration_exercises')->group(function () {
            Route::get('configuration/exercise', [ExerciseAdminController::class, 'index'])->name('admin_exercises.index');
            Route::get('configuration/exercise/create', [ExerciseAdminController::class, 'create'])->name('admin_exercises.create');
            Route::post('configuration/exercise/store', [ExerciseAdminController::class, 'store'])->name('admin_exercises.store');
            Route::get('configuration/exercise/{exercise}/edit', [ExerciseAdminController::class, 'edit'])->name('admin_exercises.edit');
            Route::put('configuration/exercise/{exercise}/update', [ExerciseAdminController::class, 'update'])->name('admin_exercises.update');
            Route::delete('configuration/exercise/{exercise}/destroy', [ExerciseAdminController::class, 'destroy'])->name('admin_exercises.destroy');
        });
    
        Route::middleware('can:configuration_reflections')->group(function () {
            Route::get('configuration/reflection', [ReflectionAdminController::class, 'index'])->name('admin_reflections.index');
            Route::get('configuration/reflection/create', [ReflectionAdminController::class, 'create'])->name('admin_reflections.create');
            Route::post('configuration/reflection/store', [ReflectionAdminController::class, 'store'])->name('admin_reflections.store');
            Route::get('configuration/reflection/{reflection}/edit', [ReflectionAdminController::class, 'edit'])->name('admin_reflections.edit');
            Route::put('configuration/reflection/{reflection}/update', [ReflectionAdminController::class, 'update'])->name('admin_reflections.update');
            Route::delete('configuration/reflection/{reflection}/destroy', [ReflectionAdminController::class, 'destroy'])->name('admin_reflections.destroy');
        });
    
        Route::middleware('can:configuration_presential_activity')->group(function () {
            Route::get('configuration/presential/activity', [PresentialActivityController::class, 'index'])->name('admin_presential_activities.index');
            Route::get('configuration/presential/activity/create', [PresentialActivityController::class, 'create'])->name('admin_presential_activities.create');
            Route::post('configuration/presential/activity/store', [PresentialActivityController::class, 'store'])->name('admin_presential_activities.store');
            Route::get('configuration/presential/activity/{presential_activity}/edit', [PresentialActivityController::class, 'edit'])->name('admin_presential_activities.edit');
            Route::put('configuration/presential/activity/{presential_activity}/update', [PresentialActivityController::class, 'update'])->name('admin_presential_activities.update');
            Route::delete('configuration/presential/activity/{presential_activity}/destroy', [PresentialActivityController::class, 'destroy'])->name('admin_presential_activities.destroy');
        });
    
        Route::middleware('can:configuration_professions')->group(function () {
            Route::get('configuration/profession', [ProfessionController::class, 'index'])->name('admin_professions.index');
            Route::get('configuration/profession/create', [ProfessionController::class, 'create'])->name('admin_professions.create');
            Route::post('configuration/profession/store', [ProfessionController::class, 'store'])->name('admin_professions.store');
            Route::get('configuration/profession/{profession}/edit', [ProfessionController::class, 'edit'])->name('admin_professions.edit');
            Route::put('configuration/profession/{profession}/update', [ProfessionController::class, 'update'])->name('admin_professions.update');
            Route::delete('configuration/profession/{profession}/destroy', [ProfessionController::class, 'destroy'])->name('admin_professions.destroy');
        });

        Route::middleware('can:configuration_evaluations')->group(function () {
            Route::get('configuration/evaluation', [EvaluationController::class, 'index'])->name('evaluations.index');
            Route::get('configuration/evaluation/create', [EvaluationController::class, 'create'])->name('evaluations.create');
            Route::post('configuration/evaluation/store', [EvaluationController::class, 'store'])->name('evaluations.store');
            Route::get('configuration/evaluation/{evaluation}/edit', [EvaluationController::class, 'edit'])->name('evaluations.edit');
            Route::put('configuration/evaluation/{evaluation}/update', [EvaluationController::class, 'update'])->name('evaluations.update');
            Route::delete('configuration/evaluation/{evaluation}/destroy', [EvaluationController::class, 'destroy'])->name('evaluations.destroy');
        });
    
        Route::middleware('can:tutor_evaluate')->group(function () {

            Route::prefix('tutor')->group(function () {
                Route::prefix('evaluation')->group(function () {
                    Route::get('reflections', [ReflectionEvaluationController::class, 'index'])->name('tutor_evaluation_reflections.index');
                    Route::get('reflection/{reflection}/all/answer', [ReflectionEvaluationController::class, 'allAnswer'])->name('tutor_evaluation_reflections.allAnswer');
                    Route::get('reflection/answer/{reflection}', [ReflectionEvaluationController::class, 'answer'])->name('tutor_evaluation_reflections.answer');
                    Route::put('reflection/answer/{reflection}/update', [ReflectionEvaluationController::class, 'update'])->name('tutor_evaluation_reflections.update');
                    Route::get('reflection/{reflection}/send/{user}', [ReflectionEvaluationController::class, 'send'])->name('tutor_send_reflections.create');
                    Route::post('reflection/{reflection}/send/{user}', [ReflectionEvaluationController::class, 'sendStore'])->name('tutor_send_reflections.store');
                    
                    Route::get('exercises', [ExerciseEvaluationController::class, 'index'])->name('tutor_evaluation_exercises.index');
                    Route::get('exercise/{exercise}/all/answer', [ExerciseEvaluationController::class, 'allAnswer'])->name('tutor_evaluation_exercises.allAnswer');
                    Route::get('exercise/answer/{exercise}', [ExerciseEvaluationController::class, 'answer'])->name('tutor_evaluation_exercises.answer');
                    Route::put('exercise/answer/{exercise}/update', [ExerciseEvaluationController::class, 'update'])->name('tutor_evaluation_exercises.update');
                    
                    Route::get('exercise/{exercise}/create', [ExerciseEvaluationController::class, 'send'])->name('tutor_send_exercises.create');
                    Route::post('exercise/{exercise}/store', [ExerciseEvaluationController::class, 'sendStore'])->name('tutor_send_exercises.store');

                    Route::get('course', [EvaluationCourseController::class, 'index'])->name('tutor_evaluation_course.index');
                });

            });


        });
    });
});

require __DIR__.'/auth.php';
