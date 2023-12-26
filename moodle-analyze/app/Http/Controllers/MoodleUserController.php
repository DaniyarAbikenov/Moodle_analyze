<?php

namespace App\Http\Controllers;

use App\Models\MoodleUser;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MoodleUserController extends Controller
{
    public function show(): View
    {
        return view('user.list', [
            'users' => MoodleUser::all()
        ]);
    }
}
