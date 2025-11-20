@extends('layouts.default')

@section('content')
<article class="container">
    <h1 class="title">
        ข่าวประชาสัมพันธ์ <i class="fas fa-angle-right"></i>{{$title}}
    </h1>

    <hr class="my-2" />

    <div class="content-wrapper">
        <div class="min-h-screen p-2">
            <div class="post__list grid grid-cols-2 max-lg:grid-cols-1 gap-4 max-lg:gap-2">
                @foreach($posts as $post)
                    <div class="post__list-item border rounded-md p-3" key={post.id}>
                        @if($post->category_id == 2)
                            <div class="post__list-img">
                                <img src="./{{$post->featured}}" alt="post-pic" />
                            </div>
                        @else
                            <div class="w-[80px] h-[80px] object-contain">
                                <img src="{{ asset('img/logo_black.png') }}" alt="logo-pic" />
                            </div>
                        @endif
                        <div class="post__list-text flex flex-col gap-1">
                            <a href="{{ url('/posts/'.$post->id) }}"><h4>{{$post->title}}</h4></a>

                            @include('components.page-subtitle', [
                                'textSize'  => "",
                                'author'    => $post->author,
                                'publishUp' => $post->publish_up
                            ])

                            <p>{{$post->title}}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-2 flex justify-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</article>
@endsection