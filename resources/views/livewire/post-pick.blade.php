<div>
    <input class="file-input file-input-xs" type="file" wire:model="photo">
    @if ($photo)
        {{ $photo->getClientOriginalName() }}
    @endif
</div>
