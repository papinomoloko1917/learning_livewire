<div>
    <button class="btn btn-xs btn-neutral"
        onclick="document.getElementById('modal-{{ $post->id }}').showModal()">Редактировать</button>
    <dialog id="modal-{{ $post->id }}" class="modal">
        <div class="modal-box">
            <h3 class="text-lg font-bold">Редактировать статью</h3>
            <form wire:submit="update({{ $post->id }})">
                <label>Название</label>
                <input type="text" wire:model="title">
                <button class="btn btn-neutral btn-xs" type="submit">Редактировать</button>
            </form>
            <p class="py-4">Press ESC key or click outside to close</p>
        </div>

        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
</div>
