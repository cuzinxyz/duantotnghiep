<?php

use App\Events\NotificationExtendServices;
use App\Events\reassignUnfinishedTasksAfterDayEvent;
use App\Models\News;
use App\Models\Salon;
use App\Livewire\Showroom;
use Spatie\Sitemap\Sitemap;
use Illuminate\Http\Request;
use Spatie\Sitemap\Tags\Url;
use App\Livewire\CarListingSystem;
use Illuminate\Support\Facades\Auth;
use App\Livewire\SingleBrandCategory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalonController;
use App\Http\Controllers\GarageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\WishlishController;
use App\Http\Controllers\CarDetailController;
use App\Http\Controllers\SearchCarController;
use App\Http\Controllers\SendGuideRequestController;
use App\Http\Controllers\Collaborators\CarsController;
use App\Http\Controllers\Collaborators\ReportController;
use App\Http\Controllers\Collaborators\ReviewController;
use App\Http\Controllers\Collaborators\SalonController as CollaboratorsSalonController;
use App\Http\Controllers\Collaborators\SupportController;
use App\Http\Controllers\Collaborators\WithDrawController;
use App\Http\Controllers\Collaborators\DashboardController;
use App\Http\Controllers\Collaborators\CollaboratorsByCarController;
use App\Models\Brand;
use App\Models\Car;
use App\Livewire\Salon\ChangeInfoSalon;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('homepage');
});

Route::middleware(['auth'])->group(function () {

    Route::controller(CarController::class)->group(function () {
        Route::get('/dang-tin-ban-xe', 'sellCar')->name('sellCar');
        Route::get('/sua-tin-ban-xe/{carID}', 'editSellCar')->name('editSellCar');
        Route::get('/an-xe/{carID}', 'removeCar')->name('hiddenCar');
        Route::get('/tin-mua-xe', 'buyCar')->name('buyCar');
    });

    Route::controller(GarageController::class)->group(function () {
        Route::match(['GET', 'POST'], '/dangki-garage', 'ownGarage')->name('dangki-garage');
        Route::match(['GET', 'POST'], '/suathongtinxe/{id}', 'editCarGarage')->name('editcargarage');
        Route::get('/them-xe-garage/{garage_id}', 'addCar')->name('addCar');
        Route::get('/xoa-xe/{carID}', 'removeCar')->name('hiddenCarGarage');
        Route::get('/garage', 'garage')->name('garage');
    });

    Route::controller(SalonController::class)->group(function () {
        Route::prefix('salon')->group(function () {
            Route::get('/', 'register')->name('salon');
            Route::post('/register', 'registerSalon')->name('registerSalon');
            Route::get('/them-xe', 'addCar')->name('salon.addcar');
            Route::get('/sua-xe/{carID}', 'editCar')->name('salon.editcar');
            Route::get('/xoa-xe/{carID}', 'deleteCar')->name('salon.deletecar');
            Route::get('/settings', 'changeInfo')->name('salon.settings');
        });
        Route::post('/account-balance', 'getBalance');
    });

    Route::controller(CheckOutController::class)->group(function () {
        # payment
        Route::post('/payment/{idService}', 'checkout')->name('payment-vnpay');
        # result after payment
        Route::get('/ket-qua', 'result')->name('resultAfterPayment');
    });

    Route::controller(SettingsController::class)->group(function () {
        Route::get('/profile', 'profile')->name('profile');

        Route::get('/day-tin/{carID}', 'pushFeature')->name('day-tin');
        Route::post('/day-tin/{carID}', 'confirmPush')->name('confirmPush');

        Route::get('/quan-ly-tin-mua', 'needBuy');
        # cái này cần sửa lại
        Route::get('/thong-tin', 'infoUser');
        Route::get('/nap-tien', 'recharge')->name('recharge');
        Route::post('/nap-tien', 'rechargeMoney')->name('recharge.submit');

        Route::get('/rut-tien', 'withdraw')->name('withdraw');
        Route::post('/rut-tien', 'withdrawMoney')->name('withdraw.submit');

        Route::get('/ket-qua-nap-tien', 'resultRecharge')->name('resultRecharge');
        Route::get('/lich-su-nap-tien', 'paymentHistory')->name('paymentHistory');
        Route::get('/huy-goi-tin/{serviceID}', 'deleteService')->name('deleteService');
        Route::match(['get', 'post'], '/cai-dat', 'settings')->name('settings');
    });

    Route::controller(WishlishController::class)->group(function () {
        Route::get('/yeu-thich', 'index')->name('wishlish');
    });

    Route::get('logout', function () {
        Auth::logout();
        return redirect()->route('homepage');
    });

    Route::controller(SendGuideRequestController::class)->group(function () {
        Route::get('/send-guide-request', 'SendGuideRequest')->name('guideRequest');
    });
});

Route::controller(ServiceController::class)->group(function () {
    Route::get('/dich-vu', 'index')->name('service.list');
    Route::get('/dich-vu/{idService}', 'detail')->name('service.detail')->middleware('auth');
});

# Posts Route
Route::get("/bai-viet", function () {
    $posts = News::all();

    if (!$posts) {
        abort(404);
    }

    return view('news.list', [
        'posts' => $posts
    ]);
})->name('news.list');

Route::get("/bai-viet/{slug}.html", function ($slug) {
    $post = News::where('slug', $slug)->first();

    if (!$post) {
        abort(404);
    }
    return view('news.detail', [
        'post' => $post
    ]);
})->name('news.index');

Route::get('/hang-xe/{slug}', SingleBrandCategory::class)->name('brand.detail');

Route::get('/oto', CarListingSystem::class)->name('car.list');

Route::get('/tin-mua-xe', [CarController::class, 'listSellCar'])->name('buyCar');

Route::controller(SearchCarController::class)->group(function () {
    Route::get('/tim-xe', 'index')->name('searchcar');
});

Auth::routes();

// Trang chi tiết xe
Route::controller(CarDetailController::class)->group(function () {
    Route::get('/oto/{slug}', 'index')->name('car-detail');
});

# salon list
Route::get('/salon/{salonSlug}', [SalonController::class, 'listCars'])->name('salon.listCars');

// collaborators
Route::prefix('/collaborators')
    ->middleware(['auth', 'is_collaborator'])
    ->group(function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/dashboard', 'dashboard')->name('collaborators.dashboard');
        });


        Route::controller(CarsController::class)->group(function () {
            Route::get('/cars', 'listCars')->name('collaborators.cars');
            Route::get('/carsData', 'carsData')->name('collaborators.carsData');
            Route::get('/carDetail/{slug}', 'carDetail')->name('collaborators.carDetail');
            Route::get('/activeCar/{id}', 'activeCar')->name('collaborators.activeCar');
            Route::post('/unActiveCar/{id}', 'unActiveCar')->name('collaborators.unActiveCar');
        });


        Route::controller(CollaboratorsSalonController::class)->group(function () {
            Route::get('/salon', 'listSalon')->name('collaborators.salons');
            Route::get('/salonData', 'salonData')->name('collaborators.salonData');
            Route::get('/salonDetail/{id}', 'salonDetail')->name('collaborators.salonDetail');
            Route::get('/activeSalon/{id}', 'activeSalon')->name('collaborators.activeSalon');
            Route::post('/unActiveSalon/{id}', 'unActiveSalon')->name('collaborators.unActiveSalon');
        });

        Route::controller(ReportController::class)->group(function () {
            Route::get('/reports', 'listReport')->name('collaborators.listReport');
            Route::get('/reportData', 'reportData')->name('collaborators.reportData');
            Route::get('/reportDetail/{id}', 'reportDetail')->name('collaborators.reportDetail');
            Route::get('/warningUser/{id}', 'warningUser')->name('collaborators.warningUser');
            Route::get('/deleteUserReported/{id}', 'deleteUserReported')->name('collaborators.deleteUserReported');
            Route::get('/deleteReported/{id}', 'deleteReported')->name('collaborators.deleteReported');
        });

        Route::controller(CollaboratorsByCarController::class)->group(function () {
            Route::get('/byCar', 'listByCar')->name('collaborators.listByCar');
            Route::get('/byCarData', 'byCarData')->name('collaborators.byCarData');
            Route::get('/byCarDetail/{id}', 'byCarDetail')->name('collaborators.byCarDetail');
            Route::get('/activeByCar/{id}', 'activeByCar')->name('collaborators.activeByCar');
            Route::post('/unActiveByCar/{id}', 'unActiveByCar')->name('collaborators.unActiveByCar');
        });

        Route::controller(WithDrawController::class)->group(function () {
            Route::get('/withDraw', 'listWithDraw')->name('collaborators.listWithDraw');
            Route::get('/withDrawData', 'withDrawData')->name('collaborators.withDrawData');
            Route::get('/withDrawDetail/{id}', 'withDrawDetail')->name('collaborators.withDrawDetail');
            Route::get('/activeWithDraw/{id}', 'activeWithDraw')->name('collaborators.activeWithDraw');
            Route::post('/unActiveWithDraw/{id}', 'unActiveWithDraw')->name('collaborators.unActiveWithDraw');
        });

        Route::controller(ReviewController::class)->group(function () {
            Route::get('/reviewCar', 'listReviewCar')->name('collaborators.listReviewCar');
            Route::get('/reviewDataCar', 'reviewDataCar')->name('collaborators.reviewDataCar');

            Route::get('/reviewDetailCar/{id}', 'reviewDetailCar')->name('collaborators.reviewDetailCar');
            Route::get('/reviewDetailCarData/{id}', 'reviewDetailCarData')->name('collaborators.reviewDetailCarData');
            Route::get('/deleteComment/{id}', 'deleteComment')->name('collaborators.deleteComment');

            Route::get('/viewReplyComment/{id}', 'viewReplyComment')->name('collaborators.viewReplyComment');
            Route::get('/viewReplyCommentData/{id}', 'viewReplyCommentData')->name('collaborators.viewReplyCommentData');
            Route::get('/deleteReplyComment/{id}', 'deleteReplyComment')->name('collaborators.deleteReplyComment');


            Route::get('/reviewNew', 'listReviewNew')->name('collaborators.listReviewNew');
            Route::get('/reviewDataNew', 'reviewDataNew')->name('collaborators.reviewDataNew');

            Route::get('/reviewDetailNew/{id}', 'reviewDetailNew')->name('collaborators.reviewDetailNew');
            Route::get('/reviewDetailNewData/{id}', 'reviewDetailNewData')->name('collaborators.reviewDetailNewData');
            Route::get('/deleteNewComment/{id}', 'deleteNewComment')->name('collaborators.deleteNewComment');

            Route::get('/viewReplyCommentNew/{id}', 'viewReplyCommentNew')->name('collaborators.viewReplyCommentNew');
            Route::get('/viewReplyCommentDataNew/{id}', 'viewReplyCommentDataNew')->name('collaborators.viewReplyCommentDataNew');
            Route::get('/deleteReplyCommentNew/{id}', 'deleteReplyCommentNew')->name('collaborators.deleteReplyCommentNew');
        });

        Route::controller(SupportController::class)->group(function () {
            Route::get('/support', 'listSupport')->name('collaborators.listSupport');
            Route::get('/supportData', 'supportData')->name('collaborators.supportData');
            Route::get('/supportDetail/{id}', 'supportDetail')->name('collaborators.supportDetail');
            Route::post('/activeSupport/{id}', 'activeSupport')->name('collaborators.activeSupport');
        });
    });


Route::post('/xem-xet', function (Request $request) {
    Salon::where('id', $request->input("salonID"))->update([
        'status' => 0
    ]);

    return response()->json('Đã gửi yêu cầu xem xét');
});

Route::get('login/google', [\App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('google.login');

Route::get('login/google/callback', [\App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback'])->name('handleGoogleCallback');

Route::get('login/facebook', [\App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('facebook.login');

Route::get('login/facebook/callback', [\App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback'])->name('handleFacebookCallback');

Route::get('/privacy', function () {
    return view('chinhsachbaomat');
});

Route::get('/account', function () {
    return view('account');
})->name('account');

Route::get('login', function () {
    return redirect()->route('account');
})->name('login');

Route::get('register', function () {
    return redirect()->route('account');
})->name('register');
