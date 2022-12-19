@section('content')
    <div>
        <p>Hello, {{ $team->name }}</p>
        {{-- <p>You have a new comment <a href="{{ url('posts/' . $comments->id) }}">{{ $comments->content }}</a></p> --}}
    </div>
@endsection
