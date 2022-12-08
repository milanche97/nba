<h1>All teams:</h1>
<ul>
@foreach ($teams as $team)
    <li>
    <h3 class="blog-post-title"><a href="{{ route('single-team', ['id' => $team->id]) }}">{{ $team->name }}</a></h3>
    </li>
    @endforeach
</ul>

