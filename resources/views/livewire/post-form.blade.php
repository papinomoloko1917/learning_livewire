<div>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif

    <form wire:submit="save">
        <input type="text" wire:model="title">
        @error('title')
            {{ $message }}
        @enderror
        <textarea wire:model="body"></textarea>
        @error('body')
            {{ $message }}
        @enderror
        <button type="submit">Отправить</button>
        <button type="button" wire:click="clear">Очистить</button>
    </form>
</div>
