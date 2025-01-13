@extends('layouts.default')

@section('content')
<section class="content-container container">
    <h1 class="title">แผนยุทธศาสตร์</h1>

    <hr class="my-2" />

    <div class="content-wrapper">
        <div class="min-h-screen px-4 mb-4">
            <!-- <div class="text-lg text-center font-bold mb-3">การดำเนินการเป็นองค์กรคุณธรรมต้นแบบ ประจำปีงบประมาณ พ.ศ. 2568 ของศูนย์สุขภาพจิตที่ 9 กรมสุขภาพจิต</div> -->

            <div>
                <a href="{{ url('/posts/231') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">แผนยุทธศาสตร์ ประจำปีงบประมาณ 2566</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/posts/75') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">แผนยุทธศาสตร์ ประจำปีงบประมาณ 2567</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/posts/230') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">แผนยุทธศาสตร์ ประจำปีงบประมาณ 2568</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection