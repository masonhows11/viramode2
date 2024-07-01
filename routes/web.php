<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteMapController;
use App\Http\Controllers\Auth_User\LoginUserController;
use App\Http\Controllers\Front\Profile\ProfileController;
use App\Http\Controllers\Auth_User\RegisterUserController;
use App\Http\Controllers\Auth_User\ValidateUserController;
use App\Http\Controllers\Auth_User\VerifyEmailPromptController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::controller(HomeController::class)->group(function () {

    Route::get('/', 'home')->name('home');

    Route::get('/page/not_found','notFound')->name('page.not.found');
});



Route::get('/about_us', [\App\Http\Controllers\Front\AboutUs\AboutUsController::class, 'aboutUs'])->name('about_us');

Route::get('/contact_us', [\App\Http\Controllers\Front\ContactUs\ContactUsController::class, 'contactUs'])->name('contact_us');
Route::post('/contact_us/store',[\App\Http\Controllers\Front\ContactUs\ContactUsController::class, 'store'])->name('contact_us.store');


Route::controller(SiteMapController::class)->group(function(){

   Route::get('/sitemap.xml','index')->name('sitemap.xml');
   Route::get('/sitemap.xml/products', 'products')->name('sitemap.xml.products');
   Route::get('/sitemap.xml/categories','categories')->name('sitemap.xml.categories');
   Route::get('/sitemap.xml/tags',  'tags')->name('sitemap.xml.tags');
   Route::get('/sitemap.xml/static', 'static')->name('sitemap.xml.static');

});


/**--------------------------auth routes---------------------**/
Route::prefix('auth')->middleware('guest')->name('auth.')->group(function () {

    Route::get('/register', [RegisterUserController::class, 'registerForm'])->name('register.form');
    Route::post('/register-user', [RegisterUserController::class, 'register'])->name('register.user');

    Route::get('/login', [LoginUserController::class, 'loginForm'])->name('login.form');
    Route::post('/login-user', [LoginUserController::class, 'login'])->middleware('throttle:auth-login-limiter')->name('login.user');

    Route::get('/validate-user', [ValidateUserController::class, 'validateForm'])->name('validate.user.form');
    Route::post('/validate-user', [ValidateUserController::class, 'validate_user'])->middleware('throttle:auth-validate-limiter')->name('validate.user');

    Route::get('/verify-email-prompt',[VerifyEmailPromptController::class,'verifyForm'])->name('verify.email.prompt');
    Route::post('/verify-email-send',[VerifyEmailPromptController::class,'verifySendEmail'])->name('verify.email.send');

    Route::get('/resend-token/{token}', [ValidateUserController::class, 'resendToken'])->middleware('throttle:auth-resend-token-limiter')->name('resend.token');
});

Route::get('/log-out', [LoginUserController::class, 'logOut'])->middleware('auth', 'web')->name('auth.log.out');


/*------------------------route user profile-----------------**/
Route::controller(ProfileController::class)->prefix('profile')->middleware(['auth', 'web','verified_user'])->group(function () {


    Route::get('/index', 'Profile')->name('user.profile');

    Route::get('/account-information',  'accountInformation')->name('user.account.information');
    Route::post('/account-information',  'updateProfile')->name('user.update.account.information');


    Route::get('/mobile-update',  'updateMobileForm')->name('mobile.update.form');
    Route::post('/mobile-update',  'updateMobile')->name('mobile.update');


    Route::get('/email-update',  'updateEmailForm')->name('email.update.form');
    Route::post('/email-update',  'updateEmail')->name('email.update');

});
