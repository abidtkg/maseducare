<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Traits\HandlesImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SettingsController extends Controller
{
    use HandlesImageUpload;

    private array $allowedGroups = ['general', 'hero', 'about', 'courses', 'seo'];

    public function show(string $group)
    {
        abort_unless(in_array($group, $this->allowedGroups), 404);

        $settings = Setting::where('group', $group)->get()->keyBy('key');
        return view("admin.settings.{$group}", compact('settings', 'group'));
    }

    public function update(Request $request, string $group)
    {
        abort_unless(in_array($group, $this->allowedGroups), 404);

        $settings = Setting::where('group', $group)->get();

        foreach ($settings as $setting) {
            // PHP converts dots in form names to underscores
            $fieldName = str_replace('.', '_', $setting->key);

            if ($setting->type === 'image') {
                if ($request->hasFile($fieldName)) {
                    $this->deleteImage($setting->value);
                    $path = $this->uploadImage($request, $fieldName, $group);
                    $setting->update(['value' => $path]);
                    Cache::forget("setting_{$setting->key}");
                }
            } else {
                $value = $request->input($fieldName, '');
                $setting->update(['value' => $value]);
                Cache::forget("setting_{$setting->key}");
            }
        }

        return back()->with('success', 'Settings updated successfully.');
    }
}
