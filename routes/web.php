<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\WebsiteController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryInfoController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\PartnertController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CategoryNewsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\SlideController;

Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/about', [WebsiteController::class, 'whoWeAre'])->name('public.about.whoWeAre');
Route::get('/about/team', [WebsiteController::class, 'teams'])->name('public.teams');
Route::get('/about/team/profil/{id}/{name}', [WebsiteController::class, 'teamById'])->name('public.teams_detail');
Route::get('/what-we-do', [WebsiteController::class, 'whatWeDo'])->name('public.whatWeDo');
Route::get('/projects', [WebsiteController::class, 'projects'])->name('public.projects');
Route::get('/projects/detail/{id}/{slug}', [WebsiteController::class, 'projectById'])->name('public.project_detail');
Route::get('/blogs', [WebsiteController::class, 'news'])->name('public.news');
Route::get('/read/{id}/{slug}', [WebsiteController::class, 'newsDetail'])->name('public.newsDetail');
Route::get('/knowledge/{id}/{category}', [WebsiteController::class, 'info'])->name('public.info');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('public.contact');
Route::get('/faqs', [WebsiteController::class, 'faq'])->name('public.faq');




Route::middleware('auth')->group( function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('app.dashboard');


    Route::prefix('team')->group(function () {
		Route::get('/', [TeamController::class,'index'])->name('team.index');
		Route::get('/create', [TeamController::class,'create'])->name('team.create');
		Route::post('/store', [TeamController::class,'store'])->name('team.store');
		Route::get('/json', [TeamController::class,'json'])->name('team.json');
		Route::get('/edit/{id}', [TeamController::class,'edit'])->name('team.edit');
		Route::get('/detail/{id}', [TeamController::class,'detail'])->name('team.detail');
		Route::post('/update', [TeamController::class,'update'])->name('team.update');
		Route::get('/delete/{id}', [TeamController::class,'destroy'])->name('team.destroy');
	});

    Route::prefix('slide')->group(function () {
		Route::get('/', [SlideController::class,'index'])->name('slide.index');
		Route::get('/create', [SlideController::class,'create'])->name('slide.create');
		Route::post('/store', [SlideController::class,'store'])->name('slide.store');
		Route::get('/json', [SlideController::class,'json'])->name('slide.json');
		Route::get('/edit/{id}', [SlideController::class,'edit'])->name('slide.edit');
		Route::get('/detail/{id}', [SlideController::class,'detail'])->name('slide.detail');
		Route::post('/update', [SlideController::class,'update'])->name('slide.update');
		Route::get('/delete/{id}', [SlideController::class,'destroy'])->name('slide.destroy');
	});

    Route::prefix('service')->group(function () {
		Route::get('/', [ServiceController::class,'index'])->name('service.index');
		Route::get('/create', [ServiceController::class,'create'])->name('service.create');
		Route::post('/store', [ServiceController::class,'store'])->name('service.store');
		Route::get('/json', [ServiceController::class,'json'])->name('service.json');
		Route::get('/edit/{id}', [ServiceController::class,'edit'])->name('service.edit');
		Route::get('/detail/{id}', [ServiceController::class,'detail'])->name('service.detail');
		Route::post('/update', [ServiceController::class,'update'])->name('service.update');
		Route::get('/delete/{id}', [ServiceController::class,'destroy'])->name('service.destroy');
	});

    Route::prefix('category_info')->group(function () {
		Route::get('/', [CategoryInfoController::class,'index'])->name('category_info.index');
		Route::get('/create', [CategoryInfoController::class,'create'])->name('category_info.create');
		Route::post('/store', [CategoryInfoController::class,'store'])->name('category_info.store');
		Route::get('/json', [CategoryInfoController::class,'json'])->name('category_info.json');
		Route::get('/edit/{id}', [CategoryInfoController::class,'edit'])->name('category_info.edit');
		Route::get('/detail/{id}', [CategoryInfoController::class,'detail'])->name('category_info.detail');
		Route::post('/update', [CategoryInfoController::class,'update'])->name('category_info.update');
		Route::get('/delete/{id}', [CategoryInfoController::class,'destroy'])->name('category_info.destroy');
	});

    Route::prefix('category_news')->group(function () {
		Route::get('/', [CategoryNewsController::class,'index'])->name('category_news.index');
		Route::get('/create', [CategoryNewsController::class,'create'])->name('category_news.create');
		Route::post('/store', [CategoryNewsController::class,'store'])->name('category_news.store');
		Route::get('/json', [CategoryNewsController::class,'json'])->name('category_news.json');
		Route::get('/edit/{id}', [CategoryNewsController::class,'edit'])->name('category_news.edit');
		Route::get('/detail/{id}', [CategoryNewsController::class,'detail'])->name('category_news.detail');
		Route::post('/update', [CategoryNewsController::class,'update'])->name('category_news.update');
		Route::get('/delete/{id}', [CategoryNewsController::class,'destroy'])->name('category_news.destroy');
	});


     Route::prefix('info')->group(function () {
		Route::get('/category/{categoryId}', [InfoController::class,'index'])->name('info.index');
		Route::get('/create', [InfoController::class,'create'])->name('info.create');
		Route::post('/store', [InfoController::class,'store'])->name('info.store');
		Route::get('/json/{categoryId}', [InfoController::class,'json'])->name('info.json');
		Route::get('/edit/{id}', [InfoController::class,'edit'])->name('info.edit');
		Route::get('/detail/{id}', [InfoController::class,'detail'])->name('info.detail');
		Route::post('/update', [InfoController::class,'update'])->name('info.update');
		Route::get('/delete/{id}', [InfoController::class,'destroy'])->name('info.destroy');
	});

     Route::prefix('news')->group(function () {
		Route::get('/category/{categoryId}', [NewsController::class,'index'])->name('news.index');
		Route::get('/create', [NewsController::class,'create'])->name('news.create');
		Route::post('/store', [NewsController::class,'store'])->name('news.store');
		Route::get('/json/{categoryId}', [NewsController::class,'json'])->name('news.json');
		Route::get('/edit/{id}', [NewsController::class,'edit'])->name('news.edit');
		Route::get('/detail/{id}', [NewsController::class,'detail'])->name('news.detail');
		Route::post('/update', [NewsController::class,'update'])->name('news.update');
		Route::get('/delete/{id}', [NewsController::class,'destroy'])->name('news.destroy');
	});




    Route::prefix('partnert')->group(function () {
		Route::get('/', [PartnertController::class,'index'])->name('partnert.index');
		Route::get('/create', [PartnertController::class,'create'])->name('partnert.create');
		Route::post('/store', [PartnertController::class,'store'])->name('partnert.store');
		Route::get('/json', [PartnertController::class,'json'])->name('partnert.json');
		Route::get('/edit/{id}', [PartnertController::class,'edit'])->name('partnert.edit');
		Route::get('/detail/{id}', [PartnertController::class,'detail'])->name('partnert.detail');
		Route::post('/update', [PartnertController::class,'update'])->name('partnert.update');
		Route::get('/delete/{id}', [PartnertController::class,'destroy'])->name('partnert.destroy');
	});

    Route::prefix('project')->group(function () {
		Route::get('/', [ProjectController::class,'index'])->name('project.index');
		Route::get('/create', [ProjectController::class,'create'])->name('project.create');
		Route::post('/store', [ProjectController::class,'store'])->name('project.store');
		Route::get('/json', [ProjectController::class,'json'])->name('project.json');
		Route::get('/edit/{id}', [ProjectController::class,'edit'])->name('project.edit');
		Route::get('/detail/{id}', [ProjectController::class,'detail'])->name('project.detail');
		Route::post('/update', [ProjectController::class,'update'])->name('project.update');
		Route::get('/delete/{id}', [ProjectController::class,'destroy'])->name('project.destroy');
	});


    Route::prefix('about')->group(function () {
		Route::get('/profile', [AboutController::class, 'profile'])->name('about.profil');
		Route::get('/profile/edit', [AboutController::class, 'profileEdit'])->name('about.profil_edit');

		Route::get('/letter', [AboutController::class, 'letter'])->name('about.letter');
		Route::get('/letter/edit', [AboutController::class, 'lettereEdit'])->name('about.letter_edit');

		Route::get('/vimission', [AboutController::class, 'vimission'])->name('about.vimission');
		Route::get('/vimission/edit', [AboutController::class, 'vimissionEdit'])->name('about.vimission_edit');

		Route::get('/contact', [AboutController::class, 'contact'])->name('about.contact');
		Route::get('/contact/edit', [AboutController::class, 'contactEdit'])->name('about.contact_edit');



        Route::post('/profile/update', [AboutController::class,'update'])->name('about.profil_update');

	});

    Route::prefix('faq')->group(function () {
		Route::get('/', [FaqController::class,'index'])->name('faq.index');
		Route::get('/create', [FaqController::class,'create'])->name('faq.create');
		Route::post('/store', [FaqController::class,'store'])->name('faq.store');
		Route::get('/json', [FaqController::class,'json'])->name('faq.json');
		Route::get('/edit/{id}', [FaqController::class,'edit'])->name('faq.edit');
		Route::get('/detail/{id}', [FaqController::class,'detail'])->name('faq.detail');
		Route::post('/update', [FaqController::class,'update'])->name('faq.update');
		Route::get('/delete/{id}', [FaqController::class,'destroy'])->name('faq.destroy');
	});








});


require __DIR__.'/auth.php';
