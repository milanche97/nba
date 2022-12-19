@extends('layouts.master')
<h2>Team:</h2>
<div class="blog-post">
    <h2 class="blog-post-title">{{ $team->name }}</h2>
        {{-- <a href="/teams/{{ $team->city }}"></a> --}}
    </p>
    <p>
        <strong>  Address: </strong>{{ $team->address }}
    </p>
    <p>
        <strong>  City: </strong>{{ $team->city }}
    </p>
    <p>
        <strong> Email:</strong> {{ $team->email }}
    </p>
    @foreach ($team->players as $player)
    <li>
        <strong> <a href="{{ route('single-player', ['id' => $player->id]) }}">{{ $player->first_name }} {{ $player->last_name }}</a></strong>
    </li>
@endforeach
<hr>
<br>
@if(count($team->news))
<ul>
    @foreach($team->news as $new)
        <li>
       <strong>{{ $new->title }}</strong>
     <br>  {{ $new->content }} 
        </li>
    @endforeach
</ul>
<br>
@endif
    <ul class="unstyled">
        @foreach ($team->comments as $comment)
            <li>
                <p>
                    {{ $comment->content }} by {{ $comment->user->name }}
                </p>
            </li>
        @endforeach
    </ul>
    <hr>
    <h2>Leave a comment:</h2>

    <form method="POST" action="{{ route('team-comments', ['team_id' => $team->id]) }}">

        {{ csrf_field() }}
        <div class="form-group">
            <label for="content">Content</label>
            <textarea type="email" class="form-control" id="content" name="content"></textarea>
            {{-- @include('partials.error-message', ['fieldTitle' => 'content']) --}}
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

