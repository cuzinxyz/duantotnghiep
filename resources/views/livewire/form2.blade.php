<div>
    <div class="home5-banner-area" style="background-color: #fff7f2">
        <form wire:submit="create">
            {{ $this->form }}
        </form>
    </div>
    
    <x-filament-actions::modals />
</div>
