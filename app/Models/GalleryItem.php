<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryItem extends Model
{
    protected $fillable = ['title', 'caption', 'image', 'category', 'sort_order', 'is_featured', 'is_active'];

    protected function casts(): array
    {
        return ['is_featured' => 'boolean', 'is_active' => 'boolean'];
    }

    public static array $categoryLabels = [
        'classroom'     => 'ক্লাসরুম / Classroom',
        'books'         => 'বই / Study Materials',
        'departure'     => 'বিদায় / Japan Departure',
        'interview'     => 'ইন্টারভিউ / School Interview',
        'visa_success'  => 'ভিসা সাফল্য / Visa Success',
        'celebration'   => 'উদযাপন / Celebration',
        'visa_document' => 'ভিসা ডকুমেন্ট / Visa Document',
        'team'          => 'টিম / Our Team',
        'event'         => 'ইভেন্ট / Events',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true)->orderBy('sort_order');
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true)->where('is_active', true);
    }
}
