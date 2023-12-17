<div class="col-md-6 mb-20" wire:ignore>

    <div class="form-inner">
        <label class="">{{$label}}</label>
        <select id="{{$nameID}}" class=" form-control bg-white nice-select beauty-shadow">
            <option value="">-- chọn hãng xe --</option>
            @foreach ($options as $option)
                <option wire:key="option-{{$option->id}}" value="{{ $option->id }}">{{ $option->$columnName }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="text-danger fw-bold" style="font-size:12px">
        @error('value')
            {{ $message }}
        @enderror
    </div>

    @script
        <script>
            $(document).ready(function() {
                $('#{{$nameID}}').select2();
            });

            $('#{{$nameID}}').on('change', function(event) {
                $wire.$set('value', event.target.value);
            })
        </script>
    @endscript
</div>
