<?php

use App\Http\Controllers\Admin\PropertiesController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\CommentsController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\requestsController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\VisionController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\StatisticController;
use App\Http\Controllers\Admin\MissionController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\DetailController;
use App\Http\Controllers\Admin\PropertyRequestController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Facades\Auth;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () { //...
        Route::group(
            [
                'prefix' => 'dashboard',
                'middleware' => ['auth', 'permission']
                // 'middleware' => ['auth', 'permission']
            ],

            function () {
                Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
                Route::post('comments/comment-status', [CommentsController::class, 'commentStatus'])->name('comments.comment-status');
                Route::resource('pages', PagesController::class);
                Route::resource('roles', RolesController::class);
                Route::resource('users', UsersController::class);
                Route::resource('permissions', PermissionsController::class);
                Route::resource('properties', PropertiesController::class);
                Route::resource('services', ServicesController::class);
                Route::resource('partners', PartnerController::class);
                Route::resource('teams', TeamController::class);
                Route::resource('testimonials', TestimonialController::class);
                Route::resource('statistics', StatisticController::class);
                Route::resource('categories', CategoriesController::class);
                Route::resource('portfolios', PortfolioController::class);
                // vision section route
                Route::get('/vision', [MissionController::class, 'vision_edit'])->name('vision.edit');
                Route::put('/vision', [MissionController::class, 'vision_update'])->name('vision.update');
                // mission page route
                Route::get('/mission', [MissionController::class, 'edit'])->name('mission.edit');
                Route::put('/mission', [MissionController::class, 'update'])->name('mission.update');

                Route::get('/about', [MissionController::class, 'about_edit'])->name('about.edit');
                Route::put('/about', [MissionController::class, 'about_update'])->name('about.update');

                Route::get('/slider', [MissionController::class, 'slider_edit'])->name('slider.edit');
                Route::put('/slider', [MissionController::class, 'slider_update'])->name('slider.update');

                Route::get('/testimonial', [MissionController::class, 'testimonial_edit'])->name('testimonial.edit');
                Route::put('/testimonial', [MissionController::class, 'testimonial_update'])->name('testimonial.update');

                Route::get('/service_page', [MissionController::class, 'service_page_edit'])->name('service_page');
                Route::put('/service_page', [MissionController::class, 'service_page_update'])->name('service_page.update');

                Route::get('/blog_page', [MissionController::class, 'blog_page_edit'])->name('blog_page');
                Route::put('/blog_page', [MissionController::class, 'blog_page_update'])->name('blog_page.update');

                Route::get('/team_page', [MissionController::class, 'team_page_edit'])->name('team_page');
                Route::put('/team_page', [MissionController::class, 'team_page_update'])->name('team_page.update');

                Route::get('/statistic_page', [MissionController::class, 'statistic_page_edit'])->name('statistic_page');
                Route::put('/statistic_page', [MissionController::class, 'statistic_page_update'])->name('statistic_page.update');

                Route::get('/portfolios_page', [MissionController::class, 'portfolios_page_edit'])->name('portfolios_page');
                Route::put('/portfolios_page', [MissionController::class, 'portfolios_page_update'])->name('portfolios_page.update');

                Route::get('/contact_page', [MissionController::class, 'contact_page_edit'])->name('contact_page');
                Route::put('/contact_page', [MissionController::class, 'contact_page_update'])->name('contact_page.update');

                Route::get('/start_page', [MissionController::class, 'start_page_edit'])->name('start_page');
                Route::put('/start_page', [MissionController::class, 'start_page_update'])->name('start_page.update');

                Route::get('/how_we_are', [MissionController::class, 'how_we_are_edit'])->name('how_we_are');
                Route::put('/how_we_are', [MissionController::class, 'how_we_are_update'])->name('how_we_are.update');

                // settings route
                Route::get('/settings', [SettingsController::class, 'edit'])->name('settings.edit');
                Route::put('/settings', [SettingsController::class, 'update'])->name('settings.update');
                // contact form page route
                Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

                Route::get('/requests', [requestsController::class, 'index'])->name('requests');
                Route::get('/requests/{id}', [requestsController::class, 'show'])->name("show.request");
                Route::get('/requests/show-reply/{id}', [ContactController::class, 'show_reply'])->name('request.show-reply');

                Route::get('/order', [ContactController::class, 'order']);

                // property request route
                Route::get('/property-request', [PropertyRequestController::class, 'index'])->name('property_request');
                Route::get('/contact/{id}', [PropertyRequestController::class, 'show'])->name('property_request.show');
                Route::get('/contact/show-reply/{id}', [PropertyRequestController::class, 'show_reply'])->name('property_request.show-reply');
                Route::post('/contact/contact-reply', [PropertyRequestController::class, 'contact_reply'])->name('property_request.contact-reply');
            }
        );
        Auth::routes();
    }
);
