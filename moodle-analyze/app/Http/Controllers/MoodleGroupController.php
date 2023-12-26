<?php

namespace App\Http\Controllers;

use App\Models\MoodleGroup;
use Illuminate\Http\Request;

class MoodleGroupController extends Controller
{
    public function show(){
        return view("group.list", [
            "groups" => MoodleGroup::all(),
        ]);
    }
}
