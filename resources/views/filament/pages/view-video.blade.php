<x-filament::page>
    <x-filament-panels::form>
        {{ $this->form }}
        
        <video controls>
            <source src="{{ asset('storage/'. $this->record->verhicle_videos) }}">
            Your browser does not support the video tag.
        </video>

        <x-filament-panels::form.actions 
            :actions="$this->getFormActions()"
        /> 
    </x-filament-panels::form>

</x-filament::page>