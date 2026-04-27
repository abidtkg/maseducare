<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

trait HandlesImageUpload
{
    protected function uploadImage(Request $request, string $field, string $folder, int $maxWidth = 1200): string
    {
        $file = $request->file($field);
        $filename = Str::uuid() . '.' . $file->extension();
        $manager = new ImageManager(new Driver());
        $image = $manager->read($file->getPathname());

        if ($image->width() > $maxWidth) {
            $image->scale(width: $maxWidth);
        }

        $path = "uploads/{$folder}/{$filename}";
        Storage::disk('public')->put($path, $image->toJpeg(85));

        return $path;
    }

    protected function deleteImage(?string $path): void
    {
        if ($path && Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}
