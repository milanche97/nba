<?php

namespace App\Http\Controllers;

use App\Mail\CommentReceived;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('forbidden-comment')->only('store');
    }


    public function store(Request $request, $team_id)
    {

        $request->validate(
            [
                'content' => 'required | min:10'
            ]
        );

        $team = Team::find($team_id);

        // dd($team->user);
        Mail::to($team)->send(new CommentReceived($team));

        Comment::create([
            'content' => $request->get('content'),
            'team_id' => $team->id,
            'user_id' => Auth::user()->id,
        ]);




        return redirect()->route('single-team', ['id' => $team_id]);


    }
}
