@section('page_title')
    Sửa tin bán xe của bạn - Drivco
@endsection

<x-partials.layout-client>
    <div>
        <div class="pt-50 mb-50">
            <div class="container">
                <livewire:form-sua-tin :id="$id" />
            </div>
        </div>
    </div>
</x-partials.layout-client>
