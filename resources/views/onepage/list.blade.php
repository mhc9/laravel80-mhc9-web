@extends('layouts.default')

@section('content')
<section class="content-container container">
    <h1 class="title">
        ข่าวประชาสัมพันธ์ <i class="fas fa-angle-right"></i>MHC9 News
    </h1>

    <hr class="my-2" />

    <div class="content-wrapper">
        <div class="pt-4 px-4 pb-2">
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-2">
                    
                        @include('components.onepage-card', ['post'  => $post])

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