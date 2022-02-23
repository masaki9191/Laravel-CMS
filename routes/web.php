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

// Example Routes
//Route::view('/', 'landing');
Route::get('/', [App\Http\Controllers\CmsPageController::class, 'index'])->name('frontend.home');
Route::get('/whatJahid', [App\Http\Controllers\CmsPageController::class, 'whatJahid'])->name('frontend.whatJahid');
Route::get('/market', [App\Http\Controllers\CmsPageController::class, 'market'])->name('frontend.market');
Route::get('/recruit', [App\Http\Controllers\CmsPageController::class, 'recruit'])->name('frontend.recruit');
Route::get('/getPostAddress', [App\Http\Controllers\PostCodeController::class, 'getAddressByPostCode'])->name('getAddressByPostCode');
Route::prefix('about')->group(function () {
    Route::get('/', [App\Http\Controllers\CmsPageController::class, 'about'])->name('frontend.about');
    Route::get('/outline', [App\Http\Controllers\CmsPageController::class, 'outline'])->name('frontend.outline');
    Route::get('/history', [App\Http\Controllers\CmsPageController::class, 'history'])->name('frontend.history');
    Route::get('/directors-and-officers', [App\Http\Controllers\CmsPageController::class, 'directorsAndOfficers'])->name('frontend.directors-and-officers');
    Route::get('/member-introduction', [App\Http\Controllers\CmsPageController::class, 'memberIntroduction'])->name('frontend.member-introduction');
    Route::get('/admission', [App\Http\Controllers\CmsPageController::class, 'admission'])->name('frontend.admission');
    Route::get('/ethics', [App\Http\Controllers\CmsPageController::class, 'ethics'])->name('frontend.ethics');
});
Route::prefix('contact')->group(function () {
    Route::get('/', [App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('frontend.contact');
    Route::get('confirmation', [App\Http\Controllers\Frontend\ContactController::class, 'confirmation'])->name('frontend.contact.confirmation');
    Route::post('store', [App\Http\Controllers\Frontend\ContactController::class, 'store'])->name('frontend.contact.store');
});
Route::prefix('user')->group(function () {
    Route::get('/', [App\Http\Controllers\Frontend\UserController::class, 'index'])->name('frontend.user');
    Route::get('confirmation', [App\Http\Controllers\Frontend\UserController::class, 'confirmation'])->name('frontend.user.confirmation');
    Route::get('information', [App\Http\Controllers\Frontend\UserController::class, 'information'])->name('frontend.user.information');
    Route::get('news', [App\Http\Controllers\Frontend\UserController::class, 'news'])->name('frontend.user.news');
});
Route::prefix('activity')->group(function () {
    Route::get('/', [App\Http\Controllers\Frontend\ActivityController::class, 'index'])->name('frontend.activity');
});
Route::prefix('disaster')->group(function () {
    Route::get('/', [App\Http\Controllers\Frontend\ActivityController::class, 'disaster'])->name('frontend.disaster');
    Route::get('information', [App\Http\Controllers\Frontend\ActivityController::class, 'information'])->name('frontend.disaster.information');
    Route::get('prevention', [App\Http\Controllers\Frontend\ActivityController::class, 'prevention'])->name('frontend.disaster.prevention');
});
Route::prefix('continousWorkshop')->group(function () {
    Route::get('outline', [App\Http\Controllers\Frontend\ContinousWorkshopController::class, 'index'])->name('frontend.workshop.outline');
    Route::get('materials', [App\Http\Controllers\Frontend\ContinousWorkshopController::class, 'materials'])->name('frontend.workshop.materials');
    Route::get('mdic', [App\Http\Controllers\Frontend\ContinousWorkshopController::class, 'mdic'])->name('frontend.workshop.mdic');
    Route::get('application', [App\Http\Controllers\Frontend\ContinousWorkshopController::class, 'application'])->name('frontend.workshop.application');
    Route::get('application/{id}', [App\Http\Controllers\Frontend\ContinousWorkshopController::class, 'applicationDetails'])->name('frontend.workshop.applicationDetails');
    Route::get('certificatOfCompletion', [App\Http\Controllers\Frontend\ContinousWorkshopController::class, 'certificatOfCompletion'])->name('frontend.workshop.certificateOfCompletion');
    Route::get('create', [App\Http\Controllers\Frontend\ContinousWorkshopController::class, 'create'])->name('frontend.workshop.create');
    Route::post('store', [App\Http\Controllers\Frontend\ContinousWorkshopController::class, 'store'])->name('frontend.workshop.store');
    Route::get('confirmation', [App\Http\Controllers\Frontend\ContinousWorkshopController::class, 'confirmation'])->name('frontend.workshop.confirmation');
    Route::get('faq', [App\Http\Controllers\Frontend\ContinousWorkshopController::class, 'faq'])->name('frontend.workshop.faq');
});
Route::prefix('membership')->group(function () {
    Route::get('/', [App\Http\Controllers\Frontend\MembershipController::class, 'index'])->name('frontend.membership');
});
Route::prefix('othersWorkshop')->group(function () {
    Route::get('outline', [App\Http\Controllers\Frontend\OtherWorkshopController::class, 'index'])->name('frontend.other.workshop.outline');
    Route::get('outline/{id}', [App\Http\Controllers\Frontend\OtherWorkshopController::class, 'outlineDetails'])->name('frontend.other.workshop.outline.details');
    Route::get('mdic', [App\Http\Controllers\Frontend\OtherWorkshopController::class, 'mdic'])->name('frontend.other.workshop.mdic');
    Route::get('events', [App\Http\Controllers\Frontend\OtherWorkshopController::class, 'events'])->name('frontend.other.workshop.events');
    Route::get('events/{id}', [App\Http\Controllers\Frontend\OtherWorkshopController::class, 'eventsDetails'])->name('frontend.other.workshop.events.details');
    Route::get('certificatOfCompletion', [App\Http\Controllers\Frontend\OtherWorkshopController::class, 'certificatOfCompletion'])->name('frontend.other.workshop.certificateOfCompletion');
    Route::get('create', [App\Http\Controllers\Frontend\OtherWorkshopController::class, 'create'])->name('frontend.other.workshop.create');
    Route::get('confirmation', [App\Http\Controllers\Frontend\OtherWorkshopController::class, 'confirmation'])->name('frontend.other.workshop.confirmation');
});
Route::prefix('seminar')->group(function () {
    Route::get('outline', [App\Http\Controllers\Frontend\SeminarController::class, 'index'])->name('frontend.seminar.outline');
    Route::get('outline/{id}', [App\Http\Controllers\Frontend\SeminarController::class, 'outlineDetails'])->name('frontend.seminar.outline.details');
    Route::get('events', [App\Http\Controllers\Frontend\SeminarController::class, 'events'])->name('frontend.seminar.events');
    Route::get('create', [App\Http\Controllers\Frontend\SeminarController::class, 'create'])->name('frontend.seminar.create');
    Route::get('confirmation', [App\Http\Controllers\Frontend\SeminarController::class, 'confirmation'])->name('frontend.seminar.confirmation');
    Route::get('events/{id}', [App\Http\Controllers\Frontend\SeminarController::class, 'eventsDetails'])->name('frontend.seminar.events.details');
});
Route::get('cdr', [App\Http\Controllers\Frontend\OtherWorkshopController::class, 'cdr'])->name('frontend.workshop.cdr');

Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');
//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->group(function () {
    Auth::routes();
    Route::get('setlocale/{locale}', function ($locale) {
        session(['_locale' => $locale]);
        return redirect()->back();
    })->name('changeLocale');

    Route::group(['middleware' => ['auth']], function () {
        Route::group(['middleware' => ['role:super-admin']], function () {
            Route::prefix('pages')->group(function () {
                Route::prefix('home')->group(function () {
                    Route::get('emergencyText', [App\Http\Controllers\Admin\CmsManagementController::class, 'emergencyText'])->name('cmsManagement.emergencyText');
                    Route::resource('cmsManagement', App\Http\Controllers\Admin\CmsManagementController::class);
                    Route::resource('topics', App\Http\Controllers\Admin\TopicController::class);
                    Route::resource('slides', App\Http\Controllers\Admin\SlidesController::class);
                });
                Route::get('/about/{title}', [App\Http\Controllers\Admin\CmsPagesController::class, 'pageByTitle'])->name('backend.getPageByTitle');
            });
            Route::get('continousWorkhopSettingsCreate', [App\Http\Controllers\Admin\MetaSettingsController::class, 'continousWorkhopSettingsCreate'])->name('continousWorkhopSettings.create');
            Route::post('continousWorkhopSettingsStore', [App\Http\Controllers\Admin\MetaSettingsController::class, 'continousWorkhopSettingsStore'])->name('continousWorkhopSettings.store');
            Route::resource('cmsPages', App\Http\Controllers\Admin\CmsPagesController::class);
            Route::resource('cmsSociety', App\Http\Controllers\Admin\CmsSocietyController::class);
            Route::resource('cmsNews', App\Http\Controllers\Admin\CmsNewsController::class);
            Route::resource('cmsDirector', App\Http\Controllers\Admin\CmsDirectorController::class);
            Route::resource('frontGalleries', App\Http\Controllers\Admin\FrontGalleryController::class);
            Route::resource('media', App\Http\Controllers\Admin\MediaController::class);
            Route::resource('master', App\Http\Controllers\Admin\MasterController::class);
            Route::resource('cmsKaiin', App\Http\Controllers\Admin\CmsKaiinController::class);
            Route::resource('cmsConference', App\Http\Controllers\Admin\CmsConferenceController::class);
            Route::resource('conferenceType', App\Http\Controllers\Admin\CmsConferenceTypeController::class);
            Route::get('cmsReservation/{conferenceId}', [App\Http\Controllers\Admin\CmsReservationController::class, 'index'])->name('cmsReservation.index');
            Route::post('cmsReservation', [App\Http\Controllers\Admin\CmsReservationController::class, 'store'])->name('cmsReservation.store');
            Route::get('pageHistory/{pageId}', [App\Http\Controllers\Admin\PageHistoryController::class, 'index'])->name('pageHistory.index');
            Route::get('pageHistory/{historyId}/show', [App\Http\Controllers\Admin\PageHistoryController::class, 'show'])->name('pageHistory.show');
            Route::delete('pageHistory/{historyId}', [App\Http\Controllers\Admin\PageHistoryController::class, 'destroy'])->name('pageHistory.delete');
            Route::put('pageHistory/{historyId}/restore', [App\Http\Controllers\Admin\PageHistoryController::class, 'restore'])->name('pageHistory.restore');
            Route::get('cssEditor/{type}', [App\Http\Controllers\Admin\CssEditorController::class, 'index'])->name('cssEditor.index');
            Route::post('cssEditor', [App\Http\Controllers\Admin\CssEditorController::class, 'store'])->name('cssEditor.store');
            Route::get('translationEditor/{type}', [App\Http\Controllers\Admin\TranslationEditorController::class, 'index'])->name('translationEditor.index');
            Route::post('translationEditor', [App\Http\Controllers\Admin\TranslationEditorController::class, 'store'])->name('translationEditor.store');
            Route::delete('workshopRegistration/multipleDelete', [App\Http\Controllers\Admin\WorkshopRegistrationController::class, 'destroyMultiple'])->name('workshopRegistration.multipleDelete');
            Route::put('workshopRegistration/statusUpdate/{status}', [App\Http\Controllers\Admin\WorkshopRegistrationController::class, 'updateStatus'])->name('workshopRegistration.statusUpdate');
        });
        Route::group(['middleware' => ['role:super-admin|master']], function () {
            Route::resource('workshop', App\Http\Controllers\Admin\WorkshopController::class);
            Route::resource('workshopRegistration', App\Http\Controllers\Admin\WorkshopRegistrationController::class);
        });
    });
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
});
