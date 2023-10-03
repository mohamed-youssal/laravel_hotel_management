@if ($errors->any())
    <div class="alert alert-dismissible alert-warning mt-2">
        <h4 class="alert-heading">Warning!</h4>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::has('succuss'))
    <h1>sucess</h1>
@endif