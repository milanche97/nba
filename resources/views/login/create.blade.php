<h2>Login</h2>

<form method="POST" action="/login">

    {{ csrf_field() }}

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email"/>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password"/>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Login</button>
    </div>

</form>

@error('message')
    @include('partials.error')
@enderror

@if (count($errors->all()) > 0)

@foreach($errors->all() as $error)
    <div class="form-group">
        <div class="alert alert-danger">
            <li>{{ $error }}</li>
        </div>
    </div>
@endforeach

@endif
