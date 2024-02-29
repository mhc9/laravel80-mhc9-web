@extends('layouts.default')

@section('content')
<section class="about container">
    <h1 class="title">{{$post->title}}</h1>

    <hr class="my-2" />

    <div class="px-2 pb-4">
        <!-- Page Header -->
        @include('components.page-header', [
            'author'    => $post->author->name,
            'publishUp' => $post->publish_up
        ])
            
        <!-- Page Content -->
        <div class="page-content">
            <!-- Render string or html -->
            @if($post->content_type_id === 1 && $post->intro_text)
                <div>
                    <div class="p-2 mt-4 flex justify-center">
                        @if($post->category_id == 2)
                            <div id="post-gallery" class="flex justify-center gap-2 w-3/4 rounded-md overflow-hidden">
                                <a href="{{ url('/'.$post->featured) }}" 
                                    data-pswp-width="2500"
                                    data-pswp-height="1668"
                                    target="_blank">
                                    <img src="{{ url('/'.$post->featured) }}" alt="headline-pic" />
                                </a>
                                <!-- ## If post have more than one images -->
                                <!-- <div class="flex flex-col gap-2 w-2/6"> -->
                                    <!-- data-pswp-src with custom URL in href -->
                                    <!-- <a href="https://unsplash.com" 
                                        data-pswp-src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/3/img-2500.jpg"
                                        data-pswp-width="2500"
                                        data-pswp-height="1666"
                                        target="_blank">
                                        <img src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/3/img-200.jpg" alt="" />
                                    </a> -->
                                    <!-- data-pswp-src with custom URL in href -->
                                    <!-- <a href="https://unsplash.com" 
                                        data-pswp-src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/3/img-2500.jpg"
                                        data-pswp-width="2500"
                                        data-pswp-height="1666"
                                        target="_blank">
                                        <img src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/3/img-200.jpg" alt="" />
                                    </a> -->
                                    <!-- wrapped with any element: -->
                                    <!-- <div>
                                        <a href="https://cdn.photoswipe.com/photoswipe-demo-images/photos/6/img-2500.jpg"
                                            data-pswp-width="2500"
                                            data-pswp-height="1667"
                                            target="_blank">
                                            <img src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/6/img-200.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div>
                                        <a href="https://cdn.photoswipe.com/photoswipe-demo-images/photos/6/img-2500.jpg"
                                            data-pswp-width="2500"
                                            data-pswp-height="1667"
                                            target="_blank">
                                            <img src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/6/img-200.jpg" alt="" />
                                        </a>
                                    </div> -->
                                <!-- </div> -->
                            </div>
                        @else
                            <div class="mb-2">
                                <img src="{{ asset('img/logo_dmh.png') }}" alt="logo-pic" />
                            </div>
                        @endif
                    </div>

                    <div class="flex justify-center py-2 text-lg max-md:text-sm">
                        <div class="post-detail w-4/5">
                            {!! $post->full_text !!}
                        </div>
                    </div>
                </div>
            @endif

            <!-- Render pdf file -->
            @if($post->content_type_id === 2 && $post->urls)
                <div class="px-10 pt-2 pb-4 flex justify-center">
                    <object
                        data="{{$post->urls}}"
                        type="application/pdf"
                        width="100%"
                        height="720px"
                    >
                        <p>Unable to display PDF file.<a href="{{$post->urls}}" target="_blank" class="ml-2 underline">Download</a> instead.</p>
                    </object>
                </div>
            @endif

            <!-- Render image -->
            @if($post->content_type_id == 3 && $post->urls)
                <div class="p-2 mt-4 flex justify-center w-full">
                    <div class="w-3/5 max-md:w-[90%] rounded-md overflow-hidden">
                        <img src="{{$post->urls}}" alt="headline-pic" />
                    </div>
                </div>
            @endif
        </div>

        <!-- // comment here... -->
    </div>
</section>

<script>
    $(document).ready(async function () {
        const lightbox = new Lightbox({
            gallery: '#post-gallery',
            children: 'a',
            showHideAnimationType: 'fade',
            pswpModule: () => PhotoSwipe
        });
        
        lightbox.init();
    });
</script>
@endsection