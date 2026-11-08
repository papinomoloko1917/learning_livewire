<div>
    <form wire:submit="store">
        <label for="">Название</label>
        <input class="input input-neutral input-sm" type="text" wire:model.live="title">
        <span wire:dirty>{{ $title }}</span>
        <input class="file-input file-input-xs" type="file" wire:model="photo">
        <button type="submit" class="btn btn-neutral btn-sm">Создать</button>
    </form>
    @if ($photo)
        {{ $photo->getClientOriginalName() }}
        @error('photo')
            <span class="text-red-600">{{ $message }}</span>
        @enderror
    @endif

    <button class="btn btn-neutral btn-xs" type="button" wire:click="export">Скачать</button>
</div>
