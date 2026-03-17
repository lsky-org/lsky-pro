<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Concerns\AuditsOperations;
use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\User;
use App\Services\AiPromptService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AiController extends Controller
{
    use AuditsOperations;

    public function prompt(Request $request, AiPromptService $service): Response
    {
        try {
            $request->validate([
                'key' => 'required|string',
                'intent' => 'required|string|max:2000',
                'template' => 'nullable|string|max:5000',
                'language' => 'nullable|string|max:32',
                'style' => 'nullable|string|max:200',
            ]);
        } catch (ValidationException $e) {
            return $this->fail($e->validator->errors()->first());
        }

        /** @var User $user */
        $user = Auth::user();
        $spaceId = $this->currentSpaceId($request);

        /** @var Image|null $image */
        $image = $user->images()
            ->when(! is_null($spaceId), function ($query) use ($spaceId) {
                $query->where('space_id', $spaceId);
            })
            ->where('key', (string) $request->input('key'))
            ->with([
                'tags:id,name',
                'intelligenceRecord:image_id,status,source,source_version,ocr_text,caption,summary,prompt_hint,labels,keywords,metadata,analyzed_at,last_error',
            ])
            ->first();

        if (! $image) {
            return $this->fail('图片不存在');
        }

        $payload = $service->buildPrompt(
            $image,
            (string) $request->input('intent'),
            $request->input('template'),
            (string) $request->input('language', 'zh-CN'),
            (string) $request->input('style', '专业、简洁、可执行')
        );

        $this->auditOperation($request, 'api.ai.prompt', 'image', 'success', [
            'target' => $image->key,
            'intent_length' => mb_strlen((string) $request->input('intent')),
        ]);

        return $this->success('success', $payload);
    }

    private function currentSpaceId(Request $request): ?int
    {
        $spaceId = (int) $request->attributes->get('space_id', 0);

        return $spaceId > 0 ? $spaceId : null;
    }
}
