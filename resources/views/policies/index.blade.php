@extends('layouts.default')

@section('content')
<section class="content-container container">
    <h1 class="title">นโยบายองค์กร</h1>

    <hr class="my-2" />

    <div class="content-wrapper">
        <div class="min-h-screen px-4">
            <a href="./posts/132">
                <div class="content-bullet">
                    <h4 class="text-[16px]">นโยบายการปฏิบัติงานศูนย์สุขภาพจิตที่ 9</h4>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
            <a href="{{ url('/policies/pdpa') }}">
                <div class="content-bullet">
                    <h4 class="text-[16px]">นโยบายด้านการคุ้มครองข้อมูลส่วนบุคคล (PDPA)</h4>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
            <a href="{{ url('./posts/311') }}">
                <div class="content-bullet">
                    <h4 class="text-[16px]">นโยบายและแนวปฏิบัติการรักษาความมั่นคงปลอดภัยไซเบอร์</h4>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection