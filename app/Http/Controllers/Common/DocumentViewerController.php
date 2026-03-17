<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DocumentViewerController extends Controller
{
    public function show(Request $request, int $id)
    {
        $image = Image::with(['strategy:id,key,configs'])->find($id);
        if (!$image) abort(404, '文件不存在');

        $ext = strtolower($image->extension);
        $viewableExtensions = ['pdf','doc','docx','xls','xlsx','csv','ppt','pptx','svg'];
        if (!in_array($ext, $viewableExtensions)) abort(400, '不支持在线查看');

        $viewerType = match(true) {
            $ext === 'pdf' => 'pdf',
            in_array($ext, ['doc', 'docx']) => $ext === 'doc' ? 'pdf' : 'docx',
            in_array($ext, ['xls', 'xlsx', 'csv']) => 'xlsx',
            in_array($ext, ['ppt', 'pptx']) => 'pdf',
            $ext === 'svg' => 'svg',
            default => 'unsupported',
        };

        $needConvert = in_array($ext, ['doc', 'ppt', 'pptx']);

        return view('common.document-viewer', [
            'image' => $image,
            'viewerType' => $viewerType,
            'needConvert' => $needConvert,
            'fileName' => $image->alias_name ?: $image->origin_name,
            'fileSize' => $image->size,
            'fileId' => $image->id,
        ]);
    }

    public function content(Request $request, int $id)
    {
        $image = Image::with(['strategy:id,key,configs'])->find($id);
        if (!$image) abort(404);

        $ext = strtolower($image->extension);
        $needConvert = in_array($ext, ['doc', 'ppt', 'pptx']);

        if ($needConvert) {
            $pdfPath = $this->convertToPdf($image);
            if ($pdfPath && file_exists($pdfPath)) {
                return response()->file($pdfPath, [
                    'Content-Type' => 'application/pdf',
                    'Content-Disposition' => 'inline',
                    'Cache-Control' => 'private, max-age=3600',
                ]);
            }
            abort(500, '文件转换失败');
        }

        $sourcePath = storage_path('app/uploads/' . $image->pathname);
        if (!file_exists($sourcePath)) {
            $sourcePath = public_path('uploads/' . $image->pathname);
        }
        if (!file_exists($sourcePath)) abort(404, '文件不存在');

        $mimeTypes = [
            'pdf' => 'application/pdf',
            'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'csv' => 'text/csv',
            'svg' => 'image/svg+xml',
        ];

        return response()->file($sourcePath, [
            'Content-Type' => $mimeTypes[$ext] ?? 'application/octet-stream',
            'Content-Disposition' => 'inline',
            'Cache-Control' => 'private, max-age=3600',
        ]);
    }

    private function convertToPdf(Image $image): ?string
    {
        $cacheDir = storage_path('app/pdf-cache');
        if (!is_dir($cacheDir)) mkdir($cacheDir, 0755, true);

        $pdfPath = $cacheDir . '/' . md5($image->key) . '.pdf';
        if (file_exists($pdfPath)) return $pdfPath;

        $sourcePath = storage_path('app/uploads/' . $image->pathname);
        if (!file_exists($sourcePath)) {
            $sourcePath = public_path('uploads/' . $image->pathname);
        }
        if (!file_exists($sourcePath)) return null;

        $tempDir = sys_get_temp_dir() . '/lo_convert_' . uniqid();
        mkdir($tempDir, 0755, true);

        $cmd = sprintf('soffice --headless --convert-to pdf --outdir %s %s 2>&1',
            escapeshellarg($tempDir), escapeshellarg($sourcePath));
        exec($cmd, $output, $ret);

        $files = glob($tempDir . '/*.pdf');
        if ($files) rename($files[0], $pdfPath);

        array_map('unlink', glob($tempDir . '/*'));
        @rmdir($tempDir);

        return file_exists($pdfPath) ? $pdfPath : null;
    }
}
