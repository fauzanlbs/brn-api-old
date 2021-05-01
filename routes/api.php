<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseLessonController;
use App\Http\Controllers\DailyCheckInController;
use App\Http\Controllers\LikeController;
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
});
