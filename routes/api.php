<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PingController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PointController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CarFuelController;
use App\Http\Controllers\CarMakeController;
use App\Http\Controllers\CarTypeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\CarModelController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\FirebaseController;
use App\Http\Controllers\BlackListController;
use App\Http\Controllers\CarColorsController;
use App\Http\Controllers\CaseReportController;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\OnboardingController;
use App\Http\Controllers\UploadFileController;
use App\Http\Controllers\CourseLessonController;
use App\Http\Controllers\DailyCheckInController;
use App\Http\Controllers\DonationUserController;
use App\Http\Controllers\CaseReportExecutionController;
use App\Http\Controllers\CourseLessonTaskQuestionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/upload-files', [UploadFileController::class, 'store']);



Route::get('/areas', [AreaController::class, 'index']);

// Regions
Route::prefix('regions')->group(function () {
    Route::get('/', [RegionController::class, 'index']);
    Route::get('/{region}/areas', [RegionController::class, 'getAreaWhereRegion']);
});


// Members
Route::prefix('members')->group(function () {
    Route::get('/', [MemberController::class, 'getMembers']);
    Route::get('/{user}', [MemberController::class, 'memberDetail']);
});

// Onboarding
Route::get('/onboardings', [OnboardingController::class, 'index']);

// Sponsor
Route::get('/sponsors', [SponsorController::class, 'index']);

// Sliders
Route::get('/sliders', [SliderController::class, 'index']);

// Donation
Route::get('/', [DonationController::class, 'index']);
Route::prefix('donations')->middleware(['auth:sanctum', 'role:korda|korwil|admin|member'])->group(function () {

    Route::get('/users', [DonationUserController::class, 'getDonationUser']);
    Route::post('/users', [DonationUserController::class, 'addDonationUser']);

});

// Aboout
Route::get('/about', [AboutController::class, 'getAbout']);

// Ping
Route::get('ping', [PingController::class, 'index']);

// Articles
Route::prefix('articles')->group(function () {
    Route::get('/', [ArticleController::class, 'getArticles']);
    Route::get('/{article}', [ArticleController::class, 'getArticleDetail']);

    Route::get('/categories/{slug}', [ArticleController::class, 'getArticleWhereCategories']);

    Route::get('/{article}/comments', [ArticleController::class, 'getArticleComments']);

    Route::get('/{article}/likes', [ArticleController::class, 'getArticleLikes']);

    Route::middleware(['auth:sanctum', 'role:member'])->group(function () {
        Route::post('/{article}/comments', [CommentController::class, 'addCommentArticle']);

        Route::post('/{article}/liked', [LikeController::class, 'likeArticle']);
        Route::delete('/{article}/liked', [LikeController::class, 'unlikeArticle']);
    });
});

// Agendas
Route::prefix('agendas')->group(function () {
    Route::get('/', [AgendaController::class, 'getAgendas']);
    Route::get('/{agenda}', [AgendaController::class, 'getAgendaDetail']);

    Route::middleware(['auth:sanctum', 'role:korda|korwil|admin'])->group(function () {
        Route::post('/', [AgendaController::class, 'store']);
        Route::post('/{agenda}', [AgendaController::class, 'update']);
        Route::post('/{agenda}/image', [AgendaController::class, 'updateImage']);
        Route::delete('/{agenda}', [AgendaController::class, 'destroy']);
        Route::delete('/{agenda}/image', [AgendaController::class, 'destroyImage']);
        Route::get('/{agenda}/qr-scan', [AgendaController::class, 'qrScan']);
    });
});

// Discussion
Route::get('/my-discussions', [DiscussionController::class, 'getMyDiscussions'])->middleware(['auth:sanctum', 'role:korda|korwil|admin|member']);
Route::prefix('discussions')->middleware(['auth:sanctum', 'role:korda|korwil|admin|member'])->group(function () {
    Route::get('/', [DiscussionController::class, 'getDiscussions']);
    Route::get('/{discussion}', [DiscussionController::class, 'getDiscussionDetail']);

    Route::post('/', [DiscussionController::class, 'store']);
    Route::post('/case-report', [DiscussionController::class, 'storeDiscussionCaseReport']);
    Route::get('/{discussion}/case-report/members', [DiscussionController::class, 'getMember']);
    Route::post('/{discussion}/case-report/members', [DiscussionController::class, 'addMember']);
    Route::delete('/{discussion}/case-report/members', [DiscussionController::class, 'detachMember']);
    Route::post('/{discussion}', [DiscussionController::class, 'update']);

    Route::delete('/{discussion}', [DiscussionController::class, 'destroy']);
    Route::patch('/{discussion}/set-finish', [DiscussionController::class, 'setFinished']);

    Route::get('/{discussion}/comments', [DiscussionController::class, 'getDiscussionComments']);

    Route::get('/{discussion}/likes', [DiscussionController::class, 'getDiscussionLikes']);

    // Route::middleware(['auth:sanctum', 'role:member',])->group(function () {
    Route::post('/{discussion}/comments', [CommentController::class, 'addCommentDiscussion']);

    Route::post('/{discussion}/liked', [LikeController::class, 'likeDiscussion']);
    Route::delete('/{discussion}/liked', [LikeController::class, 'unlikeDiscussion']);
    // });
});


Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'getCategories']);
});

Route::get('/my-courses', [CourseController::class, 'getMyCourses'])->middleware(['auth:sanctum', 'role:member']);
Route::prefix('courses')->group(function () {
    Route::get('/', [CourseController::class, 'getCourses']);
    Route::post('/{course}', [CourseController::class, 'getCourseDetail']);
    Route::get('/{course}/comments', [CourseController::class, 'getCourseComments']);
    Route::get('/{course}/likes', [CourseController::class, 'getCourseLikes']);

    Route::middleware(['auth:sanctum', 'role:member'])->group(function () {
        Route::post('/{course}/enroll', [CourseController::class, 'enrollCourse']);
        Route::post('/{course}/comments', [CommentController::class, 'addCommentCourse']);
        Route::post('/{course}/liked', [LikeController::class, 'likeCourse']);
        Route::delete('/{course}/liked', [LikeController::class, 'unlikeCourse']);

        Route::prefix('/{course}/lessons')->group(function () {
            Route::get('/', [CourseLessonController::class, 'getCourseLessons']);
            Route::get('/{courseLesson}/comments', [CourseLessonController::class, 'getCourseLessonComments']);
            Route::get('/{courseLesson}/likes', [CourseLessonController::class, 'getCourseLessonLikes']);

            Route::post('/{courseLesson}/comments', [CommentController::class, 'addCommentCourseLesson']);
            Route::post('/{courseLesson}/liked', [LikeController::class, 'likeCourseLesson']);
            Route::delete('/{courseLesson}/liked', [LikeController::class, 'unlikeCourseLesson']);
            Route::get('/{courseLesson}/task-questions', [CourseLessonTaskQuestionController::class, 'getCourseLessonTaskQuestions']);
        });
    });
    Route::get('/diklat-level-questions', [CourseLessonTaskQuestionController::class, 'getCourseLessonTaskQuestionWhereLevel'])->middleware('auth:sanctum');
});


Route::get('comments/{comment}/likes', [CommentController::class, 'getCommentLikes']);

Route::group(['middleware' => [
    'auth:sanctum',
    // 'role:member'
]], function () {

    Route::prefix('comments')->middleware(['role:member'])->group(function () {
        Route::get('/{comment}/replies', [CommentController::class, 'getCommentReplies']);
        Route::post('/{comment}/replies', [CommentController::class, 'replyComment']);
        Route::delete('/{comment}', [CommentController::class, 'deleteComment']);
        Route::post('/{comment}/liked', [LikeController::class, 'likeComment']);
        Route::delete('/{comment}/liked', [LikeController::class, 'unlikeComment']);
    });

    Route::prefix('point')->middleware(['role:member'])->group(function () {
        Route::get('/missions', [PointController::class, 'missions']);
        Route::get('/histories', [PointController::class, 'histories']);
    });

    Route::get('/check-in', [DailyCheckInController::class, 'checkIn'])->middleware(['role:member']);

    Route::prefix('cars')->middleware(['role:member'])->group(function () {
        Route::get('/colors', [CarColorsController::class, 'index']);
        Route::get('/makes', [CarMakeController::class, 'index']);
        Route::get('/models', [CarModelController::class, 'index']);
        Route::get('/types', [CarTypeController::class, 'index']);
        Route::get('/fuels', [CarFuelController::class, 'index']);
    });

    Route::get('/cars', [CarController::class, 'getCars'])->middleware(['role:member']);

    Route::prefix('my-cars')->middleware(['role:member'])->group(function () {
        Route::get('/', [CarController::class, 'getUserCars']);
        Route::get('/{car}', [CarController::class, 'getUserCarDetail']);
        Route::post('/', [CarController::class, 'store']);
        Route::post('/{car}', [CarController::class, 'update']);
        Route::delete('/{car}', [CarController::class, 'destroy']);
        Route::delete('/car-images/{carImage}', [CarController::class, 'destroyCarImage']);
    });




    Route::prefix('case-reports')->middleware(['role:korda|korwil|admin|member'])->group(function () {
        Route::get('/', [CaseReportController::class, 'getCaseReports']);
        Route::get('/chart', [CaseReportController::class, 'getChartCaseReports']);
        Route::get('/count', [CaseReportController::class, 'getCountCaseReports']);
    });

    Route::prefix('my-case-reports')->middleware(['role:member'])->group(function () {
        Route::get('/', [CaseReportController::class, 'getUserCaseReports']);
        Route::get('/count', [CaseReportController::class, 'getUserCountCaseReports']);
        Route::get('/{caseReport}', [CaseReportController::class, 'getUserCaseReportDetail']);
        Route::post('/', [CaseReportController::class, 'store']);
        Route::put('/{caseReport}/update_status', [CaseReportController::class, 'updateStatus']);
        Route::delete('/{caseReport}', [CaseReportController::class, 'cancelCaseReport']);
    });

    Route::prefix('case-report-executions')->middleware(['role:member'])->group(function () {
        Route::post('/', [CaseReportExecutionController::class, 'store']);
    });

    Route::prefix('perpetrators')->middleware(['role:korda|korwil|admin|member'])->group(function () {

        Route::post('/', [CaseReportController::class, 'storePerpetrator']);
        Route::post('/{perpetrator}', [CaseReportController::class, 'updatePerpetrator']);
        Route::delete('/{perpetrator}', [CaseReportController::class, 'destroyPerpetrator']);
    });

    Route::prefix('firebase')->middleware(['role:member'])->group(function () {
        Route::post('device-token', [FirebaseController::class, 'updateDeviceToken']);
    });

    Route::prefix('profile')->middleware(['role:member'])->group(function () {
        Route::get('/count-cars-and-case-reports', [ProfileController::class, 'countCarAndCaseReport']);
        Route::post('/update-status', [ProfileController::class, 'updateStatus']);
    });

    Route::post('/upgrade-member/{user}', [ProfileController::class, 'upgradeMember'])->middleware(['role:korda|korwil|admin|member']);
    Route::post('/user-survey/{user}', [ProfileController::class, 'updateIsSurvery'])->middleware(['role:korda|korwil|admin|member']);
});


// Perpetrator
Route::prefix('perpetrators')->group(function () {
    Route::get('/', [BlackListController::class, 'index']);
    Route::get('/{perpetrator}', [BlackListController::class, 'getPerpetratorDetail']);
});
