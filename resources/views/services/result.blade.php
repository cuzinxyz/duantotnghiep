<x-partials.layout-client>

    <div class="container">
        <div class="row justify-content-center">

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

        </div>
    </div>

</x-partials.layout-client>
