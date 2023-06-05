<?php

use App\Http\Controllers\AdminPanel\AdminProjectController;
use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\MessageController as MessageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//1-Do Something In Route
Route::get('/hello', function () {
    return 'Hello World';
});

//2-Call View In Route
Route::get('/welcome', function () {
    return view('welcome');
});
//3-HOME PAGE ROUTES
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/references',[HomeController::class,'references'])->name('references');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/faq',[HomeController::class, 'faq'])->name('faq');
Route::post('/storemessage',[HomeController::class, 'storemessage'])->name('storemessage');


//4-Route-> Controller-> View
Route::get('/test',[HomeController::class,'test'])->name('test');

//5-Route With Parameters

Route::get('/param/{id}/{number}',[HomeController::class,'param'])->name('param');

//6-Route With Post
Route::post('/save',[HomeController::class,'save'])->name('save');

Route::get('/project/{id}',[HomeController::class, 'project'])->name('project');
Route::get('/projects',[HomeController::class, 'projects'])->name('projects');
Route::get('/categoryprojects/{id}/{slug}',[HomeController::class, 'categoryprojects'])->name('categoryprojects');

Route::view('/loginuser','home.login')->name('loginuser');
Route::view('/registeruser','home.register')->name('registeruser');
Route::get('/logoutuser',[HomeController::class,'logout'])->name('logoutuser')->name('logoutuser');
Route::view('/loginadmin','admin.login')->name('loginadmin');
Route::post('/loginadmincheck',[HomeController::class,'loginadmincheck'])->name('loginadmincheck');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function (){
//**************************user
    Route::prefix('userpanel')->name('userpanel.')->controller(\App\Http\Controllers\UserController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/review', 'review')->name('review');
    });
Route::middleware('auth')->group(function (){

// *****************ADMİN PANEL ROUTES**************
Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/',[AdminHomeController::class, 'index'])->name('index');
    //**************************general routes route
    Route::get('/setting',[AdminHomeController::class, 'setting'])->name('setting');
    Route::post('/setting',[AdminHomeController::class, 'settingupdate'])->name('setting.update');


// *****************ADMİN CATEGORY ROUTES**************
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });


// *****************ADMİN PROJECT ROUTES**************
    Route::prefix('/project')->name('project.')->controller(AdminProjectController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::get("/create","create")->name("create");
        Route::post("/store","store")->name("store");
        Route::get("/edit/{id}","edit")->name("edit");
        Route::post("/update/{id}","update")->name("update");
        Route::get("/destroy/{id}","destroy")->name("destroy");
        Route::get("/show/{id}","show")->name("show");
    });

// *****************ADMİN PROJECT IMAGE GALERY ROUTES**************
  Route::prefix('/image')->name('image.')->controller(\App\Http\Controllers\AdminPanel\ImageController::class)->group(function () {
    Route::get('/{pid}', 'index')->name('index');
    Route::post('/store/{pid}','store')->name('store');
    Route::post("/update/{pid}/{id}","update")->name("update");
    Route::get('/destroy/{pid}/{id}','destroy')->name('destroy');
});
    Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');
    });
    Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });
    //**************************admin project
    Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::post('/addrole/{id}','addrole')->name('addrole');
        Route::get('/destroy/{uid}/{rid}','destroyrole')->name('destroyrole');
    });
});
});
});
