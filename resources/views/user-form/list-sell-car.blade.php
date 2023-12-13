@push('styles')
    <link rel="stylesheet" href="{{ asset('css/list-buy.css') }}">
@endpush


@section('page_title')
    Tin mua xe tại Drivco
@endsection
<x-partials.layout-client>
    <livewire:post-buy-car />
    @push('scripts')
        <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        </script>
    @endpush
</x-partials.layout-client>
