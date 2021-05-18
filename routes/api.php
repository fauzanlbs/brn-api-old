<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CarColorsController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarFuelController;
use App\Http\Controllers\CarMakeController;
use App\Http\Controllers\CarModelController;
use App\Http\Controllers\CarTypeController;
use App\Http\Controllers\CaseReportController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseLessonController;
use App\Http\Controllers\DailyCheckInController;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\OnboardingController;
use App\Http\Controllers\PingController;
use App\Http\Controllers\PointController;
use Illuminate\Support\Facades\Route;

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

// Onboarding
Route::get('/onboardings', [OnboardingController::class, 'index']);


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

    Route::middleware(['auth:sanctum'])->group(function () {
        Route::post('/{article}/comments', [CommentController::class, 'addCommentArticle']);

        Route::post('/{article}/liked', [LikeController::class, 'likeArticle']);
        Route::delete('/{article}/liked', [LikeController::class, 'unlikeArticle']);
    });
});

// Discussion
Route::get('/my-discussions', [DiscussionController::class, 'getMyDiscussions'])->middleware('auth:sanctum');
Route::prefix('discussions')->middleware(['auth:sanctum'])->group(function () {
    Route::get('/', [DiscussionController::class, 'getDiscussions']);
    Route::get('/{discussion}', [DiscussionController::class, 'getDiscussionDetail']);
    Route::post('/', [DiscussionController::class, 'store']);
    Route::post('/{discussion}', [DiscussionController::class, 'update']);
    Route::delete('/{discussion}', [DiscussionController::class, 'destroy']);

    Route::get('/{discussion}/comments', [DiscussionController::class, 'getDiscussionComments']);

    Route::get('/{discussion}/likes', [DiscussionController::class, 'getDiscussionLikes']);

    Route::middleware(['auth:sanctum'])->group(function () {
        Route::post('/{discussion}/comments', [CommentController::class, 'addCommentDiscussion']);

        Route::post('/{discussion}/liked', [LikeController::class, 'likeDiscussion']);
        Route::delete('/{discussion}/liked', [LikeController::class, 'unlikeDiscussion']);
    });
});


Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'getCategories']);
});

Route::get('/my-courses', [CourseController::class, 'getMyCourses'])->middleware('auth:sanctum');
Route::prefix('courses')->group(function () {
    Route::get('/', [CourseController::class, 'getCourses']);
    Route::post('/{course}', [CourseController::class, 'getCourseDetail']);
    Route::get('/{course}/comments', [CourseController::class, 'getCourseComments']);
    Route::get('/{course}/likes', [CourseController::class, 'getCourseLikes']);

    Route::middleware(['auth:sanctum'])->group(function () {
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
        });
    });
});


Route::get('comments/{comment}/likes', [CommentController::class, 'getCommentLikes']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::prefix('comments')->group(function () {
        Route::get('/{comment}/replies', [CommentController::class, 'getCommentReplies']);
        Route::post('/{comment}/replies', [CommentController::class, 'replyComment']);
        Route::delete('/{comment}', [CommentController::class, 'deleteComment']);
        Route::post('/{comment}/liked', [LikeController::class, 'likeComment']);
        Route::delete('/{comment}/liked', [LikeController::class, 'unlikeComment']);
    });

    Route::prefix('point')->group(function () {
        Route::get('/missions', [PointController::class, 'missions']);
        Route::get('/histories', [PointController::class, 'histories']);
    });

    Route::get('/check-in', [DailyCheckInController::class, 'checkIn']);

    Route::prefix('cars')->group(function () {
        Route::get('/colors', [CarColorsController::class, 'index']);
        Route::get('/makes', [CarMakeController::class, 'index']);
        Route::get('/models', [CarModelController::class, 'index']);
        Route::get('/types', [CarTypeController::class, 'index']);
        Route::get('/fuels', [CarFuelController::class, 'index']);
    });

    Route::prefix('my-cars')->group(function () {
        Route::get('/', [CarController::class, 'getUserCars']);
        Route::get('/{car}', [CarController::class, 'getUserCarDetail']);
        Route::post('/', [CarController::class, 'store']);
        Route::post('/{car}', [CarController::class, 'update']);
        Route::delete('/{car}', [CarController::class, 'destroy']);
        Route::delete('/car-images/{carImage}', [CarController::class, 'destroyCarImage']);
    });

    Route::prefix('my-case-reports')->group(function () {
        Route::get('/', [CaseReportController::class, 'getUserCaseReports']);
        Route::get('/{caseReport}', [CaseReportController::class, 'getUserCaseReportDetail']);
        Route::post('/', [CaseReportController::class, 'store']);
        Route::delete('/{caseReport}', [CaseReportController::class, 'cancelCaseReport']);
    });
});
