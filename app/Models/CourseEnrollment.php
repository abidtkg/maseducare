<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseEnrollment extends Model
{
    protected $fillable = ['full_name', 'phone', 'email', 'course', 'education', 'message', 'status', 'notes'];

    public static array $courseLabels = [
        'n5'             => 'JLPT N5 Course',
        'n4'             => 'JLPT N4 Course',
        'visa_processing' => 'Visa Processing',
        'interview_prep' => 'Interview Preparation',
    ];

    public static array $statusLabels = [
        'new'       => 'New',
        'contacted' => 'Contacted',
        'enrolled'  => 'Enrolled',
        'rejected'  => 'Rejected',
    ];
}
