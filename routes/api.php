<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ImageController;
use App\Http\Controllers\Api\V1\AlbumController;
use App\Http\Controllers\Api\V1\TokenController;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\StrategyController;
use App\Http\Controllers\Api\V1\UploadTaskController;
use App\Http\Controllers\Api\V1\AnalyticsController;
use App\Http\Controllers\Api\V1\WebhookController;
use App\Http\Controllers\Api\V1\SpaceController;
use App\Http\Controllers\Api\V1\AiController;
use App\Http\Controllers\Api\V1\ProcessingController;
use App\Http\Controllers\Api\V1\Admin\ReviewController as AdminReviewController;
use App\Http\Controllers\Api\V1\ProcessTemplateController;
use App\Http\Middleware\CheckIsEnableApi;
use App\Http\Middleware\EnforceTokenRestrictions;
use App\Http\Middleware\ResolveTeamSpaceContext;

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

Route::group([
    'prefix' => 'v1',
    'middleware' => CheckIsEnableApi::class,
], function () {
    Route::get('strategies', [StrategyController::class, 'index']);
    Route::post('upload', [ImageController::class, 'upload'])->middleware('throttle:30,1');
    Route::post('tokens', [TokenController::class, 'store'])->middleware('throttle:3,1');

    Route::group([
        'middleware' => ['auth:sanctum', EnforceTokenRestrictions::class, ResolveTeamSpaceContext::class],
    ], function () {
        Route::get('upload-tasks/{taskId}', [UploadTaskController::class, 'show']);
        Route::get('images', [ImageController::class, 'images']);
        Route::get('images/search', [ImageController::class, 'search']);
        Route::get('images/ai-search', [ImageController::class, 'aiSearch']);
        Route::post('images/{key}/process', [ImageController::class, 'process']);
        Route::get('process-templates', [ProcessTemplateController::class, 'index']);
        Route::post('process-templates', [ProcessTemplateController::class, 'store']);
        Route::post('process-templates/{id}/run', [ProcessTemplateController::class, 'run']);
        Route::post('process-templates/{id}/dispatch', [ProcessTemplateController::class, 'dispatchTemplate']);
        Route::get('process-jobs', [ProcessTemplateController::class, 'jobs']);
        Route::get('process-jobs/{jobId}', [ProcessTemplateController::class, 'job']);
        Route::post('process-jobs/{jobId}/retry', [ProcessTemplateController::class, 'retry']);
        Route::post('process-jobs/{jobId}/cancel', [ProcessTemplateController::class, 'cancel']);
        Route::get('images/{key}/signed-url', [ImageController::class, 'signedUrl']);
        Route::delete('images/{key}', [ImageController::class, 'destroy']);
        Route::post('images/batch-delete/preview', [ImageController::class, 'batchDeletePreview']);
        Route::post('images/batch-delete', [ImageController::class, 'batchDelete']);
        Route::post('images/batch-delete/rollback/{batchId}', [ImageController::class, 'batchDeleteRollback']);
        Route::get('albums', [AlbumController::class, 'index']);
        Route::delete('albums/{id}', [AlbumController::class, 'destroy']);
        Route::delete('tokens', [TokenController::class, 'clear']);
        Route::get('profile', [UserController::class, 'index']);
        Route::get('spaces', [SpaceController::class, 'index']);
        Route::post('spaces/switch', [SpaceController::class, 'switchContext']);
        Route::get('spaces/{id}/members', [SpaceController::class, 'members']);
        Route::put('spaces/{id}/members/{userId}/role', [SpaceController::class, 'updateMemberRole']);
        Route::get('stats/overview', [AnalyticsController::class, 'overview']);
        Route::get('webhooks', [WebhookController::class, 'index']);
        Route::post('webhooks', [WebhookController::class, 'store']);
        Route::patch('webhooks/{id}/toggle', [WebhookController::class, 'toggle']);
        Route::delete('webhooks/{id}', [WebhookController::class, 'destroy']);
        Route::post('ai/prompt', [AiController::class, 'prompt']);
        Route::get('processing/drivers/status', [ProcessingController::class, 'status']);

        Route::prefix('admin')->group(function () {
            Route::get('reviews', [AdminReviewController::class, 'index']);
            Route::post('reviews/{key}/approve', [AdminReviewController::class, 'approve']);
            Route::post('reviews/{key}/reject', [AdminReviewController::class, 'reject']);
        });
    });
});
