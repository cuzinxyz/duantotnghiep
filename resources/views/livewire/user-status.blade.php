<div>
    @if (auth()->user()->active == 1)
        Online
    @else
        Offline
    @endif
</div>
