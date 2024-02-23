@extends('layouts.default')

@section('content')
<section class="post__list-container container">
    <h1 class="title">
        ข่าวประชาสัมพันธ์ <i class="fas fa-angle-right"></i>{{$title}}
    </h1>

    <hr class="my-2" />

    <div class="post__list-wrapper px-4">
        @if($cate)
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row p-4">
                        @foreach($posts as $post)
                            <div class="col-md-12 post__list-item" key={post.id}>
                                @if($post->category_id == 2)
                                    <div class="post__list-img">
                                        <img src="./{{$post->featured}}" alt="post-pic" />
                                    </div>
                                @else
                                    <div class="w-[80px] h-[80px] object-contain">
                                        <img src="{{ asset('img/logo_dmh.png') }}" alt="logo-pic" />
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
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                </div>
            </div>
        @else
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-12 post__list-item" key={post.id}>
                        @if($post->category_id == 2)
                            <div class="post__list-img">
                                <img src="./{{$post->featured}}" alt="post-pic" />
                            </div>
                        @else
                            <div class="w-[80px] h-[80px] object-contain">
                                <img src="{{ asset('img/logo_dmh.png') }}" alt="logo-pic" />
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
        @endif
    </div>
</section>
@endsection