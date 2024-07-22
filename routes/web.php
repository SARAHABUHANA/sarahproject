<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\TrainingSessionController;




use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProjectclalengeController;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureUserIsAuthenticated;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/dashboard', function () {
    return view('admin.dashboard')->name('dashboard');
});


Route::get('/', [HomeController::class,'index']);
// routes/web.php

Route::get('/',  [ProjectController::class,'design'])->name('projects.design');


Route::get('/challenge', [ChallengeController::class, 'last']);
Route::get('/challenge/{id}', [ChallengeController::class,'show']);
Route::get('/profile', [ProfileController::class, 'show'])->middleware('auth')->name('users.profile');
Route::get('/users', [UsersController::class, 'index']);

Route::get('/add_company', [CompanyController::class, 'create'])->middleware('auth')->name('companies.create');
Route::post('/add_company', [CompanyController::class, 'store'])->middleware('auth')->name('companies.store');

Route::get('/addjob', [JobController::class,'create'])->name('jobs.create');

Route::get('/comp/{company}', [CompanyController::class,'show'])->name('companies.show')->middleware('auth');
Route::post('/comp/{company}', [JobController::class, 'store'])->name('jobs.store');



Route::post('/addjob/{company}/trainings', [TrainingController::class,'store'])->name('trainings.store');

Route::get('/usersprofile/{id}', [UsersController::class, 'show'])->name('users.show');


Route::get('/singleproj/{id}', [ProjectController::class,'showcomment'])->name('comments.show');


Route::post('/singleproj/{id}/comments', [CommentController::class,'store'])->name('projects.storeComment')->middleware('auth');;





Route::middleware([EnsureUserIsAuthenticated::class])->group(function () {

    Route::get('/addproject', [ProjectclalengeController::class, 'create'])->name('projectschallenge.create')->middleware('auth');
     Route::post('/addproject', [ProjectclalengeController::class, 'store'])->name('projectschallenge.store');
});




Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

        Route::get('/idea', function () {
            return view('admin.idea');
        });
        Route::get('/home', function () {
            return view('admin.home');
        });
        Route::get('admin/users', [AdminController::class, 'users']);
        Route::get('/user_details/{id}', [AdminController::class, 'showUser'])->name('user.details');
        Route::delete('/admin/users/{id}', [AdminController::class, 'deleteUser'])->name('admin.user_details');

        Route::get('/home', [AdminController::class, 'latestProjects'])->name('projects');
        Route::get('/admin/projects', [AdminController::class, 'Projects']);
        Route::get('/project_details/{id}', [AdminController::class, 'showProject'])->name('admin.project_details');
        Route::delete('/admin/projects/{id}', [AdminController::class, 'deleteProject'])->name('admin.project_delete');
        
    Route::get('/challeng', [ChallengeController::class, 'index'])->name('challenges.index');
    Route::get('/idea', [IdeaController::class, 'index'])->name('ideas.index');
    Route::get('/Tsessions', [TrainingSessionController::class,'index'])->name('training-sessions.index');
    Route::get('/createsesstion/create',  [TrainingSessionController::class,'create'])->name('training-sessions.create');
    Route::post('/createsesstion', [TrainingSessionController::class,'store'])->name('training-sessions.store');
    Route::get('/sassion_edit/{id}/',  [TrainingSessionController::class,'edit'])->name('training-sessions.edit');
Route::put('/sassion_edit/{id}/',  [TrainingSessionController::class,'update'])->name('training-sessions.update');
Route::delete('/Tsessions/{id}/',  [TrainingSessionController::class,'destroy'])->name('training-sessions.destroy');
       

        Route::get('/challenge', [ChallengeController::class, 'last'])->name('last.challenge');
        Route::get('/challenge/{id}', [ChallengeController::class,'show']);



     
        
        
       
  
Route::get('/dashboard', [UsersController::class, 'usertable']);
Route::group(['prefix' => 'profile'], function () {
    Route::get('profile/user/{id}', 'profileController@show');
 
});

 // routes/web.php

Route::post('/projects/{project}/like', [ProjectController::class,'like'])->name('projects.vots');
   


Route::post('/addqus',  [QuestionController::class,'store'])->name('questions.store');

Route::prefix('dashboard')->group(function () {
  
    Route::get('/idea/creat', [IdeaController::class, 'create'])->name('admin.ideas.create');
    Route::post('/idea', [IdeaController::class, 'store'])->name('admin.ideas.store');
    Route::delete('/idea/{id}', [IdeaController::class, 'destroy'])->name('ideas.destroy');
    Route::get('/challeng/creat', [ChallengeController::class, 'create'])->name('admin.challeng.create');
    Route::post('/challeng', [ChallengeController::class, 'store'])->name('admin.challeng.store');
    Route::delete('/challeng/{id}', [ChallengeController::class,'destroy'])->name('challenges.destroy');
    Route::get('/challeng/{id}/edit',[ChallengeController::class,'edit'])->name('challenges.edit');

Route::put('/challeng/{id}', [ChallengeController::class,'update'])->name('challenges.update');
        Route::get('/challeng', [ChallengeController::class, 'index']);
        Route::get('/challeng', function () {
            return view('admin.challeng');
        
        });
    });

    
  // routes/web.php أو routes/api.php

Route::post('/challenge/{project}', [VoteController::class,'store'])->name('projects.vots');




Route::post('/profile', [ProjectController::class, 'store'])->name('projects.store');
Route::get('user_edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');


Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/profile/{id}', [ProfileController::class, 'showProjects'])->name('user.projects');
Route::get('/project_edit/{id}', [ProjectController::class, 'edit'])->name('projects.edit');
Route::put('/profile/{id}', [ProjectController::class, 'update'])->name('projects.update');
Route::delete('/profile/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');




Route::get('/creatproject/create', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/creatproject', [ProjectController::class, 'store'])->name('projects.store');
