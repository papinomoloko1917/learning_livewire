<div>
    <div wire:loading>
        Waiting..
    </div>
    <input type="text" class="input input-neutral input-sm" wire:model.live="search">
    <ul>
        @forelse ($posts as $post)
            <li wire:key="{{ $post->id }}" class="pt-3 flex flex-col-1 gap-4" wire:key="{{ $post->id }}">
                {{ $loop->iteration }}. {{ $post->title }}
                <livewire:post-pick />
                <livewire:post-update :post="$post" />
                <button class="btn btn-xs btn-error" wire:click="delete({{ $post->id }})"
                    wire:confirm="Удалить пост?">Удалить</button>
            </li>
        @empty
            <span>Таких результатов нет...</span>
        @endforelse
    </ul>
    <div>
        {{ $posts->links() }}
    </div>
    <livewire:add-post />

    <button class="btn btn-neutral btn-xs" wire:click="showAll">Показать все посты</button>

    <div wire:show="show">
        <livewire:post-all />
    </div>

    <div>
        <input class="input input-neutral input-xs" type="number" wire:model.live="num1">
        <input class="input input-neutral input-xs" type="number" wire:model.live="num2">
        <span>{{ $this->summation }}</span>
    </div>
</div>
