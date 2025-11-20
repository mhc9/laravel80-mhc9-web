@extends('layouts.default')

@section('content')
<article class="container">
    <h1 class="title">
        ข่าวประชาสัมพันธ์ <i class="fas fa-angle-right"></i>{{$title}}
    </h1>

    <hr class="my-2" />

    <div class="content-wrapper">
        <div class="min-h-screen pt-2 pb-4">
            <div class="post__list">
                @if($cate == '3')
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="tab-31" data-bs-toggle="tab" data-bs-target="#plans" type="button" role="tab" aria-controls="plans" aria-selected="true">
                                แผนการจัดซื้อจัดจ้าง
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-32" data-bs-toggle="tab" data-bs-target="#results" type="button" role="tab" aria-controls="results" aria-selected="false">
                                สรุปผลการจัดซื้อจัดจ้าง
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-34" data-bs-toggle="tab" data-bs-target="#reports" type="button" role="tab" aria-controls="reports" aria-selected="false">
                                รายงานผลการจัดซื้อจัดจ้าง
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-35" data-bs-toggle="tab" data-bs-target="#procures" type="button" role="tab" aria-controls="procures" aria-selected="false">
                                ประกาศจัดซื้อจัดจ้าง
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-33" data-bs-toggle="tab" data-bs-target="#winners" type="button" role="tab" aria-controls="winners" aria-selected="false">
                                ประกาศผู้ชนะการเสนอราคา
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab-36" data-bs-toggle="tab" data-bs-target="#tors" type="button" role="tab" aria-controls="tors" aria-selected="false">
                                ประกาศร่าง TOR
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="plans" role="tabpanel" aria-labelledby="plans-tab">
                            <div class="min-h-screen">
                                <div class="row p-4">
                                    @if(count($plans) > 0)
                                        @foreach($plans as $post)
                                            <div class="col-md-12 post__list-item">
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
                                    @else
                                        <div class="alert alert-danger flex items-center gap-2" role="alert">
                                            <i class="fas fa-exclamation-triangle text-xl"></i>
                                            <div>ไม่มีรายการ</div>
                                        </div>
                                    @endif
                                </div>

                                <div class="mt-2 flex justify-center">
                                    {{ $plans->links() }}
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="results" role="tabpanel" aria-labelledby="results-tab">
                            <div class="min-h-screen">
                                <div class="row p-4">
                                    @if(count($results) > 0)
                                        @foreach($results as $post)
                                            <div class="col-md-12 post__list-item">
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
                                    @else
                                        <div class="alert alert-danger flex items-center gap-2" role="alert">
                                            <i class="fas fa-exclamation-triangle text-xl"></i>
                                            <div>ไม่มีรายการ</div>
                                        </div>
                                    @endif
                                </div>

                                <div class="mt-2 flex justify-center">
                                    {{ $results->links() }}
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="reports" role="tabpanel" aria-labelledby="reports-tab">
                            <div class="min-h-screen">
                                <div class="row p-4">
                                    @if(count($reports) > 0)
                                        @foreach($reports as $post)
                                            <div class="col-md-12 post__list-item">
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
                                    @else
                                        <div class="alert alert-danger flex items-center gap-2" role="alert">
                                            <i class="fas fa-exclamation-triangle text-xl"></i>
                                            <div>ไม่มีรายการ</div>
                                        </div>
                                    @endif
                                </div>

                                <div class="mt-2 flex justify-center">
                                    {{ $reports->links() }}
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="procures" role="tabpanel" aria-labelledby="procures-tab">
                            <div class="min-h-screen">
                                <div class="row p-4">
                                    @if(count($procures) > 0)
                                        @foreach($procures as $post)
                                            <div class="col-md-12 post__list-item">
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
                                    @else
                                        <div class="alert alert-danger flex items-center gap-2" role="alert">
                                            <i class="fas fa-exclamation-triangle text-xl"></i>
                                            <div>ไม่มีรายการ</div>
                                        </div>
                                    @endif
                                </div>

                                <div class="mt-2 flex justify-center">
                                    {{ $procures->links() }}
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="winners" role="tabpanel" aria-labelledby="winners-tab">
                            <div class="min-h-screen">
                                <div class="row p-4">
                                    @if(count($winners) > 0)
                                        @foreach($winners as $post)
                                            <div class="col-md-12 post__list-item">
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
                                    @else
                                        <div class="alert alert-danger flex items-center gap-2" role="alert">
                                            <i class="fas fa-exclamation-triangle text-xl"></i>
                                            <div>ไม่มีรายการ</div>
                                        </div>
                                    @endif
                                </div>
                                
                                <div class="mt-2 flex justify-center">
                                    {{ $winners->links() }}
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tors" role="tabpanel" aria-labelledby="tors-tab">
                            <div class="min-h-screen">
                                <div class="row p-4">
                                    @if(count($tors) > 0)
                                        @foreach($tors as $post)
                                            <div class="col-md-12 post__list-item">
                                                <div class="w-[80px] h-[80px] object-contain">
                                                    <img src="{{ asset('img/logo_black.png') }}" alt="logo-pic" />
                                                </div>
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
                                    @else
                                        <div class="alert alert-danger flex items-center gap-2" role="alert">
                                            <i class="fas fa-exclamation-triangle text-xl"></i>
                                            <div>ไม่มีรายการ</div>
                                        </div>
                                    @endif
                                </div>

                                <div class="mt-2 flex justify-center">
                                    {{ $tors->links() }}
                                </div>
                            </div>
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
                @endif  
            </div>
        </div>
    </div>
</article>
<script>
    $(document).ready(function () {
        const group = '{{ $group }}';

        let activedTab = new bootstrap.Tab($(`#tab-${group == '' ? '31' : group}`));
        activedTab.show();
    });
</script>
@endsection