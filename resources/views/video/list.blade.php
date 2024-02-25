@extends('layouts.default')

@section('content')
<section class="content-container container">
    <h1 class="title">
        สื่อสุขภาพจิต <i class="fas fa-angle-right"></i>{{$title}}
    </h1>

    <hr class="my-2" />

    <div class="content-wrapper">
        <div class="p-2">
            <div class="row">
                @foreach($posts as $video)
                    <div class="col-md-12 col-lg-4 mb-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-2">
                                    <a href="{{$video->urls}}" target="_blank">
                                        <h3 class="card-title lg:min-h-[60px]">{{$video->title}}</h3>
                                    </a>
    
                                    @include('components.page-subtitle', [
                                        'textSize'  => "xs",
                                        'author'    => $video->author,
                                        'publishUp' => $video->publish_up
                                    ])
                                </div>
                                <div class="video-item md:h-[320px] mb-0">
                                    <iframe
                                        width="100%"
                                        height="100%"
                                        src="{{$video->urls}}"
                                        title="{{$video->title}}"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowFullScreen
                                    ></iframe>
                                </div>
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