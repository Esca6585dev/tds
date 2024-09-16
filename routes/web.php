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

Route::get('/', [App\Http\Controllers\UserControllers\UserController::class, 'goToMainPage'])->name('goToMainPage');

Route::get('/login', function(){
    return redirect()->route('login', app()->getlocale());
} )->name('login');

Route::get('/tm/email/verify', [App\Http\Controllers\Auth\VerificationController::class, 'show'])->name('verification.notice');
Route::get('/tm/email/verify/{id}/{hash}', [App\Http\Controllers\Auth\VerificationController::class, 'verify'])->name('verification.verify');
Route::post('/tm/email/resend', [App\Http\Controllers\Auth\VerificationController::class, 'resend'])->name('verification.resend');

Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-z]{2}'],
], function () {

    // Route::get('/demiryol', [App\Http\Controllers\FrontControllers\FrontController::class, 'index'])->name('main-page-demiryol');

    // Route::post('/demiryol/outbound', [App\Http\Controllers\FrontControllers\FrontController::class, 'outbound'])->name('outbound');

    // Route::post('/demiryol/outbound/check', [App\Http\Controllers\FrontControllers\FrontController::class, 'check'])->name('check');

    // Route::get('/demiryol/check/ticket', [App\Http\Controllers\FrontControllers\FrontController::class, 'checkTicket'])->name('check-ticket');

    // Route::post('/demiryol/buy/ticket', [App\Http\Controllers\FrontControllers\FrontController::class, 'buyTicket'])->name('buy-ticket');


    Route::get('/e-sign', [App\Http\Controllers\UserControllers\UserController::class, 'eSign'])->name('e-sign')->middleware(['auth','verified','require_phone_number']);

    Route::get('/', [App\Http\Controllers\UserControllers\UserController::class, 'mainPage'])->name('main-page');

    Route::get('/rss', [App\Http\Controllers\UserControllers\UserController::class, 'rss'])->name('rss');

    Route::get('/contact-us', [App\Http\Controllers\UserControllers\UserController::class, 'contactUs'])->name('contact-us');

    Route::post('/send/message', [App\Http\Controllers\UserControllers\UserController::class, 'sendMessage'])->name('send-message')->middleware(['auth','verified','require_phone_number']);

    Route::get('/news', [App\Http\Controllers\UserControllers\UserController::class, 'news'])->name('news');

    Route::get('/news/{id}-{slug}', [App\Http\Controllers\UserControllers\UserController::class, 'newsID'])->name('news.id');

    Route::get('/works', [App\Http\Controllers\UserControllers\UserController::class, 'works'])->name('works');

    Route::get('/works/{id}-{slug}', [App\Http\Controllers\UserControllers\UserController::class, 'worksID'])->name('works.id');

    Route::get('/web-sites', [App\Http\Controllers\UserControllers\UserController::class, 'websites'])->name('websites');

    Route::get('/{id}-{slug}', [App\Http\Controllers\UserControllers\UserController::class, 'category'])->name('category');

    Route::get('/state/standards', [App\Http\Controllers\UserControllers\UserController::class, 'stateStandards'])->name('state.standards');

    Route::get('/digital/services', [App\Http\Controllers\UserControllers\UserController::class, 'digitalServices'])->name('digital.services');
    
    Route::get('/digital/services/{id}-{slug}', [App\Http\Controllers\UserControllers\UserController::class, 'digitalServicesCategory'])->name('digital.services.category');

    Route::post('/add-to-cart-application/{id}', [App\Http\Controllers\UserControllers\UserController::class, 'addToCartApplication'])->middleware(['auth','verified','require_phone_number']);
    Route::get('/application/{id}/{section}', [App\Http\Controllers\UserControllers\UserController::class, 'fillApplication'])->name('fill-application')->middleware(['auth','verified','require_phone_number']);
    
    Route::post('/application/standards/bolumi', [App\Http\Controllers\UserControllers\UserController::class, 'sendApplicationStandardsBolumi'])->name('send-application-standards-bolumi')->middleware(['auth','verified','require_phone_number']);
    Route::post('/application/guramacylyk/bolumi', [App\Http\Controllers\UserControllers\UserController::class, 'sendApplicationGuramacylykBolumi'])->name('send-application-guramacylyk-bolumi')->middleware(['auth','verified','require_phone_number']);
    Route::post('/application/kiberhowpsuzlyk/bolumi', [App\Http\Controllers\UserControllers\UserController::class, 'sendApplicationKiberhowpsuzlykBolumi'])->name('send-application-kiberhowpsuzlyk-bolumi')->middleware(['auth','verified','require_phone_number']);
    Route::post('/application/beyleki/bolumler', [App\Http\Controllers\UserControllers\UserController::class, 'sendApplicationBeylekiBolumler'])->name('send-application-beyleki-bolumler')->middleware(['auth','verified','require_phone_number']);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'profile'])->name('home');
    Route::get('/email', [App\Http\Controllers\HomeController::class, 'email']);

    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
    Route::get('/profile/password/change', [App\Http\Controllers\HomeController::class, 'passwordChange'])->name('profile.password.change');
    Route::post('/profile/password/change', [App\Http\Controllers\HomeController::class, 'passwordChangeEdit'])->name('profile.password.edit');
    Route::get('/profile/cart', [App\Http\Controllers\HomeController::class, 'cart'])->name('profile.cart');
    Route::get('/profile/application', [App\Http\Controllers\HomeController::class, 'application'])->name('profile.application');
    Route::get('/profile/application/create', [App\Http\Controllers\HomeController::class, 'applicationCreate'])->name('profile.application.create');
    Route::get('/profile/application/create/{id}/{section}', [App\Http\Controllers\HomeController::class, 'applicationCreateSection'])->name('profile.application.create.section');
    Route::get('/profile/application/{code_number}/docx', [App\Http\Controllers\HomeController::class, 'docx'])->name('profile.docx');
    Route::get('/profile/{code_number}/docx', [App\Http\Controllers\HomeController::class, 'docx']);
    Route::get('/profile/letterhead', [App\Http\Controllers\HomeController::class, 'letterhead'])->name('profile.letterhead');
    Route::post('/profile/letterhead/edit', [App\Http\Controllers\HomeController::class, 'letterheadEdit'])->name('profile.letterhead.edit');
    Route::post('/profile/edit', [App\Http\Controllers\HomeController::class, 'profileEdit'])->name('profile.edit');
    Route::post('/profile/form', [App\Http\Controllers\HomeController::class, 'form'])->name('profile.form');

    Auth::routes(
        [
            'login' => true,
            'register' => true,
        ]
    );
    
});

Auth::routes(
    [
        'login' => false,
        'register' => false,
        'reset' => true,
    ]
);

require __DIR__ . '/admin-routes/auth/admin-auth-route.php';
require __DIR__ . '/admin-routes/panel/admin-panel-route.php';

