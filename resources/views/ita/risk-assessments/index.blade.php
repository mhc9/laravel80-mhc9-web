@extends('layouts.default')

@section('content')
<section class="content-container container">
    <h1 class="title">ITA <i class="fas fa-angle-right"></i>การประเมินความเสี่ยงการทุจริตประจำปี</h1>

    <hr class="my-2" />

    <div class="content-wrapper">
        <div class="min-h-screen px-4 mb-4">
            <div>
                <a href="{{ url('/posts/271') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">แบบรายงานประเด็นความเสี่ยงการทุจริต ประจำปีงบประมาณ 2568</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/posts/272') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">แบบรายงานผลการบริหารจัดการความเสี่ยงการทุจริต ประจำปีงบประมาณ 2568</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection