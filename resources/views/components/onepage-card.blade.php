<div class="card">
    <div class="card-body">
        @include('components.page-subtitle', [
            'textSize'  => "xs",
            'author'    => $post->author,
            'publishUp' => $post->publish_up
        ])

        <div class="mt-2">
            <a href="{{ url('/posts/' . $post->id) }}">
                <img src="{{ url('/' . $post->featured) }}" alt="onepage-cover" />
            </a>
        </div>
    </div>
</div>