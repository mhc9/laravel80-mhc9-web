@extends('layouts.default')

@section('content')
<section class="post__list-container container">
    <h1 class="title">
        ข่าวประชาสัมพันธ์ <i class="fas fa-angle-right"></i>{{$title}}
    </h1>

    <hr class="my-2" />

    <div class="post__list-wrapper">
        <div class="mb-4">
            @if($cate == '3')
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="plans-tab" data-bs-toggle="tab" data-bs-target="#plans" type="button" role="tab" aria-controls="plans" aria-selected="true">
                            แผนการจัดซื้อจัดจ้าง
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="results-tab" data-bs-toggle="tab" data-bs-target="#results" type="button" role="tab" aria-controls="results" aria-selected="false">
                            สรุปผลการจัดซื้อจัดจ้าง
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="reports-tab" data-bs-toggle="tab" data-bs-target="#reports" type="button" role="tab" aria-controls="reports" aria-selected="false">
                            รายงานผลการจัดซื้อจัดจ้าง
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="procures-tab" data-bs-toggle="tab" data-bs-target="#procures" type="button" role="tab" aria-controls="procures" aria-selected="false">
                            ประกาศจัดซื้อจัดจ้าง
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="winners-tab" data-bs-toggle="tab" data-bs-target="#winners" type="button" role="tab" aria-controls="winners" aria-selected="false">
                            ประกาศผู้ชนะการเสนอราคา
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tors-tab" data-bs-toggle="tab" data-bs-target="#tors" type="button" role="tab" aria-controls="tors" aria-selected="false">
                            ประกาศร่าง TOR
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="plans" role="tabpanel" aria-labelledby="plans-tab">
                        <div class="min-h-screen">
                            <div class="row p-4">
                                @if(count($plans) > 1)
                                    @foreach($plans as $plan)
                                        <div class="col-md-12 post__list-item">
                                            @if($plan->category_id == 2)
                                                <div class="post__list-img">
                                                    <img src="./{{$plan->featured}}" alt="post-pic" />
                                                </div>
                                            @else
                                                <div class="w-[80px] h-[80px] object-contain">
                                                    <img src="{{ asset('img/logo_dmh.png') }}" alt="logo-pic" />
                                                </div>
                                            @endif
                                            <div class="post__list-text flex flex-col gap-1">
                                                <a href="{{ url('/posts/'.$plan->id) }}"><h4>{{$plan->title}}</h4></a>
        
                                                @include('components.page-subtitle', [
                                                    'textSize'  => "",
                                                    'author'    => $plan->author,
                                                    'publishUp' => $plan->publish_up
                                                ])
        
                                                <p>{{$plan->title}}</p>
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
                                @if(count($results) > 1)
                                    @foreach($results as $plan)
                                        <div class="col-md-12 post__list-item">
                                            @if($plan->category_id == 2)
                                                <div class="post__list-img">
                                                    <img src="./{{$plan->featured}}" alt="post-pic" />
                                                </div>
                                            @else
                                                <div class="w-[80px] h-[80px] object-contain">
                                                    <img src="{{ asset('img/logo_dmh.png') }}" alt="logo-pic" />
                                                </div>
                                            @endif
                                            <div class="post__list-text flex flex-col gap-1">
                                                <a href="{{ url('/posts/'.$plan->id) }}"><h4>{{$plan->title}}</h4></a>
        
                                                @include('components.page-subtitle', [
                                                    'textSize'  => "",
                                                    'author'    => $plan->author,
                                                    'publishUp' => $plan->publish_up
                                                ])
        
                                                <p>{{$plan->title}}</p>
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
                                @if(count($reports) > 1)
                                    @foreach($reports as $plan)
                                        <div class="col-md-12 post__list-item">
                                            @if($plan->category_id == 2)
                                                <div class="post__list-img">
                                                    <img src="./{{$plan->featured}}" alt="post-pic" />
                                                </div>
                                            @else
                                                <div class="w-[80px] h-[80px] object-contain">
                                                    <img src="{{ asset('img/logo_dmh.png') }}" alt="logo-pic" />
                                                </div>
                                            @endif
                                            <div class="post__list-text flex flex-col gap-1">
                                                <a href="{{ url('/posts/'.$plan->id) }}"><h4>{{$plan->title}}</h4></a>
        
                                                @include('components.page-subtitle', [
                                                    'textSize'  => "",
                                                    'author'    => $plan->author,
                                                    'publishUp' => $plan->publish_up
                                                ])
        
                                                <p>{{$plan->title}}</p>
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
                                @if(count($procures) > 1)
                                    @foreach($procures as $plan)
                                        <div class="col-md-12 post__list-item">
                                            @if($plan->category_id == 2)
                                                <div class="post__list-img">
                                                    <img src="./{{$plan->featured}}" alt="post-pic" />
                                                </div>
                                            @else
                                                <div class="w-[80px] h-[80px] object-contain">
                                                    <img src="{{ asset('img/logo_dmh.png') }}" alt="logo-pic" />
                                                </div>
                                            @endif
                                            <div class="post__list-text flex flex-col gap-1">
                                                <a href="{{ url('/posts/'.$plan->id) }}"><h4>{{$plan->title}}</h4></a>
        
                                                @include('components.page-subtitle', [
                                                    'textSize'  => "",
                                                    'author'    => $plan->author,
                                                    'publishUp' => $plan->publish_up
                                                ])
        
                                                <p>{{$plan->title}}</p>
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
                                @if(count($winners) > 1)
                                    @foreach($winners as $plan)
                                        <div class="col-md-12 post__list-item">
                                            @if($plan->category_id == 2)
                                                <div class="post__list-img">
                                                    <img src="./{{$plan->featured}}" alt="post-pic" />
                                                </div>
                                            @else
                                                <div class="w-[80px] h-[80px] object-contain">
                                                    <img src="{{ asset('img/logo_dmh.png') }}" alt="logo-pic" />
                                                </div>
                                            @endif
                                            <div class="post__list-text flex flex-col gap-1">
                                                <a href="{{ url('/posts/'.$plan->id) }}"><h4>{{$plan->title}}</h4></a>
        
                                                @include('components.page-subtitle', [
                                                    'textSize'  => "",
                                                    'author'    => $plan->author,
                                                    'publishUp' => $plan->publish_up
                                                ])
        
                                                <p>{{$plan->title}}</p>
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
                                @if(count($tors) > 1)
                                    @foreach($tors as $plan)
                                        <div class="col-md-12 post__list-item">
                                            <div class="w-[80px] h-[80px] object-contain">
                                                <img src="{{ asset('img/logo_dmh.png') }}" alt="logo-pic" />
                                            </div>
                                            <div class="post__list-text flex flex-col gap-1">
                                                <a href="{{ url('/posts/'.$plan->id) }}"><h4>{{$plan->title}}</h4></a>
        
                                                @include('components.page-subtitle', [
                                                    'textSize'  => "",
                                                    'author'    => $plan->author,
                                                    'publishUp' => $plan->publish_up
                                                ])
        
                                                <p>{{$plan->title}}</p>
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
    </div>
</section>
@endsection