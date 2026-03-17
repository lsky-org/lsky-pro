<?php

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

use App\Http\Middleware\CheckIsEnableApi;
use App\Http\Middleware\CheckIsEnableGallery;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\ImageController;
use App\Http\Controllers\User\AlbumController;
use App\Http\Controllers\Api\V1\AiController as ApiAiController;
use App\Http\Controllers\Api\V1\AiConfigController as ApiAiConfigController;
use App\Http\Controllers\Api\V1\AiPromptTaskController as ApiAiPromptTaskController;
use App\Http\Controllers\Api\V1\ImageController as ApiImageController;
use App\Http\Controllers\Api\V1\IntelligenceController as ApiIntelligenceController;
use App\Http\Controllers\Api\V1\IntelligenceJobController as ApiIntelligenceJobController;
use App\Http\Controllers\Api\V1\PerformanceController as ApiPerformanceController;
use App\Http\Controllers\Api\V1\ProcessingController as ApiProcessingController;
use App\Http\Controllers\Api\V1\ProcessTemplateController as ApiProcessTemplateController;
use App\Http\Controllers\Api\V1\SpaceController as ApiSpaceController;
use App\Http\Controllers\Api\V1\WebhookController as ApiWebhookController;
use App\Http\Controllers\Api\V1\Admin\ReviewController as ApiAdminReviewController;
use App\Http\Controllers\Common\GalleryController;
use App\Http\Controllers\Common\DocumentViewerController;
use App\Http\Controllers\Common\ApiController;

use App\Http\Controllers\Admin\GroupController as AdminGroupController;
use App\Http\Controllers\Admin\StrategyController as AdminStrategyController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\SettingController as AdminSettingController;
use App\Http\Controllers\Admin\ImageController as AdminImageController;
use App\Http\Controllers\Admin\AlbumShareController;
use App\Services\InstallStateService;

Route::get('/', function (InstallStateService $installState) {
    if (! $installState->isInstalled()) {
        return redirect()->route('install');
    }

    return redirect()->route('login');
})->name('/');

Route::any('install', [Controller::class, 'install'])->name('install');
Route::post('upload', [Controller::class, 'upload']);
Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('admin/console', [UserController::class, 'adminConsole'])->name('admin.console');
    Route::get('advanced', [UserController::class, 'advanced'])->name('advanced');
    Route::get('advanced/{feature}', [UserController::class, 'advancedFeature'])->name('advanced.feature');
    Route::get('gallery', [GalleryController::class, 'index'])->middleware(CheckIsEnableGallery::class)->name('gallery');
    Route::get('gallery/images', [GalleryController::class, 'images'])->name('gallery.images');
    Route::get('gallery/albums', [GalleryController::class, 'albums'])->name('gallery.albums');
    // 文档在线查看
    Route::get('document-viewer/{id}', [DocumentViewerController::class, 'show'])->name('document.viewer');
    Route::get('document-content/{id}', [DocumentViewerController::class, 'content'])->name('document.content');


    Route::prefix('settings')->group(function () {
        Route::get('', [UserController::class, 'settings'])->name('settings');
        Route::put('', [UserController::class, 'update'])->name('settings.update');
        Route::put('set-strategy', [UserController::class, 'setStrategy'])->name('settings.strategy.set');
        Route::put('header-tabs', [UserController::class, 'saveHeaderTabs'])->name('settings.header-tabs.save');
        Route::post('issue-api-token', [UserController::class, 'issueApiToken'])
            ->middleware('throttle:5,1')
            ->name('settings.api-token.issue');
    });

    Route::group([
        'prefix' => 'api',
        'middleware' => CheckIsEnableApi::class
    ], function () {
        Route::get('', [ApiController::class, 'index'])->name('api');
        Route::get('openapi.json', [ApiController::class, 'spec'])->name('api.spec');
    });

    Route::prefix('advanced-api')->name('advanced.api.')->group(function () {
        Route::post('images/batch-delete/preview', [ApiImageController::class, 'batchDeletePreview'])->name('images.batch-delete.preview');
        Route::post('images/batch-delete', [ApiImageController::class, 'batchDelete'])->name('images.batch-delete.execute');
        Route::post('images/batch-delete/rollback/{batchId}', [ApiImageController::class, 'batchDeleteRollback'])->name('images.batch-delete.rollback');
        Route::get('images/search', [ApiImageController::class, 'search'])->name('images.search');
        Route::get('images/ai-search', [ApiImageController::class, 'aiSearch'])->name('images.ai-search');
        Route::post('images/{key}/process', [ApiImageController::class, 'process'])->name('images.process');
        Route::post('ai/prompt', [ApiAiController::class, 'prompt'])->name('ai.prompt');
        Route::post('ai/prompt-tasks', [ApiAiPromptTaskController::class, 'store'])->name('ai.prompt-tasks.store');
        Route::get('ai/prompt-tasks/{taskId}', [ApiAiPromptTaskController::class, 'show'])->name('ai.prompt-tasks.show');
        Route::get('ai/config', [ApiAiConfigController::class, 'show'])->name('ai.config.show');
        Route::post('ai/config/providers/{provider}/models:fetch', [ApiAiConfigController::class, 'models'])
            ->whereIn('provider', ['gpt', 'deepseek', 'qwen', 'gemini'])
            ->name('ai.config.models.fetch');
        Route::put('ai/config/active', [ApiAiConfigController::class, 'setActive'])->name('ai.config.set-active');
        Route::put('ai/config', [ApiAiConfigController::class, 'update'])->name('ai.config.update');
        Route::get('intelligence/status', [ApiIntelligenceController::class, 'status'])->name('intelligence.status');
        Route::post('intelligence/backfill-preview', [ApiIntelligenceController::class, 'preview'])
            ->middleware('throttle:10,1')
            ->name('intelligence.backfill.preview');
        Route::post('intelligence/backfill-dispatch', [ApiIntelligenceController::class, 'dispatchBackfill'])
            ->middleware('throttle:5,1')
            ->name('intelligence.backfill.dispatch');
        Route::get('intelligence/job-status', [ApiIntelligenceJobController::class, 'status'])->name('intelligence.job.status');
        Route::post('intelligence/job-start', [ApiIntelligenceJobController::class, 'start'])->name('intelligence.job.start');
        Route::post('intelligence/job-pause', [ApiIntelligenceJobController::class, 'pause'])->name('intelligence.job.pause');
        Route::post('intelligence/job-resume', [ApiIntelligenceJobController::class, 'resume'])->name('intelligence.job.resume');
        Route::post('intelligence/job-stop', [ApiIntelligenceJobController::class, 'stop'])->name('intelligence.job.stop');
        Route::post('intelligence/job-clear', [ApiIntelligenceJobController::class, 'clear'])->name('intelligence.job.clear');
        Route::get('intelligence/job-logs', [ApiIntelligenceJobController::class, 'logs'])->name('intelligence.job.logs');
        Route::get('intelligence/job-schedule', [ApiIntelligenceJobController::class, 'scheduleGet'])->name('intelligence.job.schedule.get');
        Route::post('intelligence/job-schedule', [ApiIntelligenceJobController::class, 'scheduleSet'])->name('intelligence.job.schedule.set');
        Route::get('system/performance', [ApiPerformanceController::class, 'summary'])->name('system.performance');
        Route::get('processing/drivers/status', [ApiProcessingController::class, 'status'])->name('processing.status');

        Route::get('process-templates', [ApiProcessTemplateController::class, 'index'])->name('templates.index');
        Route::post('process-templates', [ApiProcessTemplateController::class, 'store'])->name('templates.store');
        Route::post('process-templates/{id}/run', [ApiProcessTemplateController::class, 'run'])->name('templates.run');
        Route::post('process-templates/{id}/dispatch', [ApiProcessTemplateController::class, 'dispatchTemplate'])->name('templates.dispatch');

        Route::get('process-jobs', [ApiProcessTemplateController::class, 'jobs'])->name('jobs.index');
        Route::get('process-jobs/{jobId}', [ApiProcessTemplateController::class, 'job'])->name('jobs.show');
        Route::post('process-jobs/{jobId}/retry', [ApiProcessTemplateController::class, 'retry'])->name('jobs.retry');
        Route::post('process-jobs/{jobId}/cancel', [ApiProcessTemplateController::class, 'cancel'])->name('jobs.cancel');

        Route::get('spaces', [ApiSpaceController::class, 'index'])->name('spaces.index');
        Route::get('spaces/{id}/members', [ApiSpaceController::class, 'members'])->name('spaces.members');
        Route::put('spaces/{id}/members/{userId}/role', [ApiSpaceController::class, 'updateMemberRole'])->name('spaces.members.role.update');

        Route::get('webhooks', [ApiWebhookController::class, 'index'])->name('webhooks.index');
        Route::post('webhooks', [ApiWebhookController::class, 'store'])->name('webhooks.store');
        Route::patch('webhooks/{id}/toggle', [ApiWebhookController::class, 'toggle'])->name('webhooks.toggle');
        Route::delete('webhooks/{id}', [ApiWebhookController::class, 'destroy'])->name('webhooks.destroy');

        Route::get('admin/reviews', [ApiAdminReviewController::class, 'index'])->name('reviews.index');
        Route::post('admin/reviews/{key}/approve', [ApiAdminReviewController::class, 'approve'])->name('reviews.approve');
        Route::post('admin/reviews/{key}/reject', [ApiAdminReviewController::class, 'reject'])->name('reviews.reject');
    });

    Route::get('upload', fn () => redirect()->route('images'))->name('upload');
    Route::get('images', [ImageController::class, 'index'])->name('images');
    Route::group(['prefix' => 'user'], function () {
        Route::get('images', [ImageController::class, 'images'])->name('user.images');
        Route::get('images/{id}', [ImageController::class, 'image'])->name('user.image');
        Route::get('images/{id}/preview', [ImageController::class, 'preview'])->name('user.image.preview');
        Route::delete('images', [ImageController::class, 'delete'])->name('user.images.delete');
        Route::put('images/permission', [ImageController::class, 'permission'])->name('user.images.permission');
        Route::put('images/rename', [ImageController::class, 'rename'])->name('user.images.rename');
        Route::put('images/movement', [ImageController::class, 'movement'])->name('user.images.movement');
        Route::get('albums', [AlbumController::class, 'albums'])->name('user.albums');
        Route::post('albums', [AlbumController::class, 'create'])->name('user.album.create');
        Route::put('albums/{id}', [AlbumController::class, 'update'])->name('user.album.update');
        Route::delete('albums/{id}', [AlbumController::class, 'delete'])->name('user.album.delete');
    });
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth.admin']], function () {
    Route::group(['prefix' => 'users'], function () {
        Route::get('', [AdminUserController::class, 'index'])->name('admin.users');
        Route::get('{id}', [AdminUserController::class, 'edit'])->name('admin.user.edit');
        Route::put('{id}', [AdminUserController::class, 'update'])->name('admin.user.update');
        Route::delete('{id}', [AdminUserController::class, 'delete'])->name('admin.user.delete');
    });

    Route::group(['prefix' => 'images'], function () {
        Route::get('', [AdminImageController::class, 'index'])->name('admin.images');
        Route::put('{id}', [AdminImageController::class, 'update'])->name('admin.image.update');
        Route::delete('batch', [AdminImageController::class, 'batchDelete'])->name('admin.images.batch.delete');
        Route::delete('{id}', [AdminImageController::class, 'delete'])->name('admin.image.delete');
    });

    Route::group(['prefix' => 'groups'], function () {
        Route::get('', [AdminGroupController::class, 'index'])->name('admin.groups');
        Route::get('create', [AdminGroupController::class, 'add'])->name('admin.group.add');
        Route::post('create', [AdminGroupController::class, 'create'])->name('admin.group.create');
        Route::get('{id}', [AdminGroupController::class, 'edit'])->name('admin.group.edit');
        Route::put('{id}', [AdminGroupController::class, 'update'])->name('admin.group.update');
        Route::delete('{id}', [AdminGroupController::class, 'delete'])->name('admin.group.delete');
        Route::delete('{id}/clear-cache', [AdminGroupController::class, 'clearCache'])->name('admin.group.cache.clear');
    });

    Route::group(['prefix' => 'strategies'], function () {
        Route::get('', [AdminStrategyController::class, 'index'])->name('admin.strategies');
        Route::get('create', [AdminStrategyController::class, 'add'])->name('admin.strategy.add');
        Route::post('create', [AdminStrategyController::class, 'create'])->name('admin.strategy.create');
        Route::get('{id}', [AdminStrategyController::class, 'edit'])->name('admin.strategy.edit');
        Route::put('{id}', [AdminStrategyController::class, 'update'])->name('admin.strategy.update');
        Route::delete('{id}', [AdminStrategyController::class, 'delete'])->name('admin.strategy.delete');
    });

    Route::group(['prefix' => 'settings'], function () {
        Route::get('', [AdminSettingController::class, 'index'])->name('admin.settings');
        Route::put('save', [AdminSettingController::class, 'save'])->name('admin.settings.save');
        Route::post('mail-test', [AdminSettingController::class, 'mailTest'])
            ->middleware('throttle:5,1')
            ->name('admin.settings.mail.test');
        Route::get('check-update', [AdminSettingController::class, 'checkUpdate'])
            ->middleware('throttle:10,1')
            ->name('admin.settings.check.update');
        Route::post('upgrade', [AdminSettingController::class, 'upgrade'])
            ->middleware('throttle:2,1')
            ->name('admin.settings.upgrade');
        Route::get('upgrade/progress', [AdminSettingController::class, 'upgradeProgress'])
            ->middleware('throttle:60,1')
            ->name('admin.settings.upgrade.progress');
    });

    Route::get('albums/{id}/shares', [AlbumShareController::class, 'index'])->name('admin.album.shares');
    Route::post('albums/{id}/shares', [AlbumShareController::class, 'store'])->name('admin.album.shares.store');
    Route::delete('albums/{id}/shares/{userId}', [AlbumShareController::class, 'destroy'])->name('admin.album.shares.destroy');
    Route::get('share-users', [AlbumShareController::class, 'users'])->name('admin.share.users');
});

require __DIR__.'/image.php';
require __DIR__.'/auth.php';
