{{-- @push('scripts')
    <script>
        Livewire.on('showSuccess', message => {
            toastr.success(message);
        });
    </script>
@endpush --}}
<x-partials.layout-client>
    <div class="contact-page pt-50 mb-50">
        <h2 class="mb-5">Tin đăng đã lưu</h2>
        <livewire:wishlist />
    </div>
</x-partials.layout-client>z
