
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
