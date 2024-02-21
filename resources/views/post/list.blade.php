@extends('layouts.app')

@section('content')
<section class="post__list-container container">
    <h1 class="title">
        ข่าวประชาสัมพันธ์ <i class="fas fa-angle-right"></i>ข่าวกิจกรรม
    </h1>

    <hr class="my-2" />

    <div class="post__list-wrapper px-4">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-12 post__list-item" key={post.id}>
                    <div class="post__list-img">
                        <img src="./{{$post->featured}}" alt="post-pic" />
                    </div>
                    <div class="post__list-text flex flex-col gap-1">
                        <Link to="{{ url('/posts/'.$post->id) }}"><h4>{{$post->title}}</h4></Link>
                        <!-- <PageSubtitle post={post} /> -->
                        <p>{{$post->title}}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-2 flex justify-center">
            {{ $posts->links() }}
        </div>
    </div>
</section>
@endsection