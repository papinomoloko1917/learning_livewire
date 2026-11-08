<div>

    <ul>
        @foreach ($posts as $post)
            <li>
                {{ $post->title }}
                <img src="{{ $post->pic }}" alt="{{ $post->title }}">
            </li>
        @endforeach
    </ul>

</div>
