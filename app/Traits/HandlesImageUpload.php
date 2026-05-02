<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Encoders\JpegEncoder;

trait HandlesImageUpload
{
    protected function uploadImage(Request $request, string $field, string $folder, int $maxWidth = 1200): string
    {
        $file    = $request->file($field);
        $filename = Str::uuid() . '.jpg';
        $manager  = new ImageManager(new Driver());
        $image    = $manager->decode($file->getPathname());

        if ($image->width() > $maxWidth) {
            $image->scale(width: $maxWidth);
        }

        $dir  = public_path("uploads/{$folder}");
        $path = "uploads/{$folder}/{$filename}";

        if (! is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        file_put_contents(public_path($path), $image->encode(new JpegEncoder(85)));

        return $path;
    }

    protected function deleteImage(?string $path): void
    {
        $full = public_path($path ?? '');
        if ($path && is_file($full)) {
            @unlink($full);
        }
    }
}
