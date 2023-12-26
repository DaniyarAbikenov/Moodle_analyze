<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoodleGroup extends Model
{
    protected $table = "mdl_groups";
    protected $fillable = ["id", "name"];
    use HasFactory;

    public function students()
    {
        return $this->belongsToMany(MoodleUser::class, 'mdl_groups_members', 'groupid', 'userid');

    }
}
