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

    <ul>
        @foreach ($titles as $title)
            <li>
                <livewire:row :title="$title" wire:key="{{ $title }}" />
            </li>
        @endforeach
    </ul>

    <form wire:submit="save" class="flex justify-center flex-col gap-3">
        <input class="input" type="text" wire:model="title">
        @error('title')
            {{ $message }}
        @enderror
        <textarea class="textarea" wire:model="body"></textarea>
        @error('body')
            {{ $message }}
        @enderror
        <livewire:button>Отправить</livewire:button>
    </form>
    <livewire:button>Очистить</livewire:button>
</div>
