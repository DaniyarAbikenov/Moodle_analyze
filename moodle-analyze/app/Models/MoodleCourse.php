<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoodleCourse extends Model
{
    protected $table = "mdl_course";

    public function users()
    {
        return $this->belongsToMany(MoodleUser::class, 'mdl_course_completions', 'course', 'userid');
    }
    use HasFactory;
}
