@extends('layouts.default')

@section('content')
<section class="content-container container">
    <h1 class="title">
        สื่อสุขภาพจิต <i class="fas fa-angle-right"></i>{{$title}}
    </h1>

    <hr class="my-2" />

    <div class="content-wrapper">
        <div class="p-4">
            <div class="row">
                @foreach($posts as $article)
                    <div class="col-sm-12 col-md-4 col-lg-3 mb-2">
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

                                <p class="card-text">
                                    <span>{{$article->intro_text}}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-2 flex justify-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</section>
@endsection