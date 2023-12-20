<div class="col-md-6" wire:ignore>
    <div class="form-inner">
        <label class="">{{$label}} <span class="text-danger fw-bold">(*)</span></label>
        <select id="{{$nameID}}" class=" form-control bg-white nice-select beauty-shadow">
            <option>-- {{$label}} --</option>
            @foreach ($options as $option)
                <option wire:key="option-{{$option->id}}" value="{{ $option->id }}">{{ $option->$columnName }}
                </option>
            @endforeach
        </select>
    </div>

    @script
        <script>
            $(document).ready(function() {
                $('#{{$nameID}}').select2({
                    theme: "bootstrap-5",
                    width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                        'style',
                    placeholder: $(this).data('placeholder'),
                });
            });

            $('#{{$nameID}}').on('change', function(event) {
                $wire.$set('value', event.target.value);
            })
        </script>
    @endscript

    @push('styles')
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    @endpush
</div>
