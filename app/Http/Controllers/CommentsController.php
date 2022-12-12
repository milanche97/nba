<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    
    public function store(Request $request, $team_id)
    {

        $request->validate(
            [
                'content' => 'required | min:10'
            ]
        );

        $team = Team::find($team_id);

    }
}
