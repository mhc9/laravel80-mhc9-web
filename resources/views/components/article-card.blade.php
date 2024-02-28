<div class="card article-item">
    <div class="card-img-top h-[200px]">
        <img src="{{ url('/' . $article->featured) }}" alt="article-cover" />
    </div>
    <div class="card-body">
        <a href="{{ url('/posts/' . $article->id) }}">
            <h3 class="card-title">{{$article->title}}</h3>
        </a>

        @include('components.page-subtitle', [
            'textSize'  => "xs",
            'author'    => $article->author,
            'publishUp' => $article->publish_up
        ])

        <p class="card-text mt-2">
            <span>{{$article->intro_text}}</span>
        </p>
    </div>
</div>