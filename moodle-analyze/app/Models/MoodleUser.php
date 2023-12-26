<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoodleUser extends Model
{

    protected $table = "mdl_user";
    protected $fillable = ["firstname", "lastname"];
    use HasFactory;

    public function courses()
    {
        return $this->belongsToMany(MoodleCourse::class, 'mdl_course_completions', 'userid', 'course');
    }
    public function groups()
    {
        return $this->belongsToMany(MoodleGroup::class, 'mdl_groups_members', 'userid', 'groupid');

    }
}
