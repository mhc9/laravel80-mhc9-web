@extends('layouts.default')

@section('content')
<section class="content-container container">
    <h1 class="title">
        คลังความรู้ <i class="fas fa-angle-right"></i>{{$title}}
    </h1>

    <hr class="my-2" />

    <div class="content-wrapper">
        <div class="p-4">
            <div class="row">
                @foreach($posts as $article)
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-2">
                    
                        @include('components.article-card', ['article'  => $article])

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