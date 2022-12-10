<h1>Player:</h1>
<div class="blog-post">
  <h2 class="blog-post-title">{{ $player->first_name }} {{ $player->last_name }}</h2>
  <p class="blog-post-meta"><strong>Email: {{ $player->email }}</a></p>
  <p class="blog-post-meta"><strong>Team:</strong> <a href="{{ route('single-team', ['id' => $player->team->id]) }}">{{ $player->team->name }}</a></p>
</div>
