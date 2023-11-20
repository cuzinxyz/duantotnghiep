@if (Session::has('status'))
    <div class="container alert alert-primary alert-dismissible" role="alert">

        <strong>{{ Session::get('status') }}</strong>

    </div>
@endif

@if (Session::has('success'))
    <div class="container alert alert-success alert-dismissible" role="alert">

        <strong>{{ Session::get('success') }}</strong>

    </div>
@endif

@if (Session::has('warning'))
    <div class="container alert alert-warning alert-dismissible" role="alert">

        <strong>{{ Session::get('warning') }}</strong>

    </div>
@endif

@if (Session::has('error'))
    <div class="container alert alert-danger alert-dismissible" role="alert">

        <strong>{{ Session::get('error') }}</strong>

    </div>
@endif

@if ($errors->any())

    <div class="alert alert-danger alert-dismissible" role="alert">

        <ul>

            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

        </ul>

    </div>

@endif
