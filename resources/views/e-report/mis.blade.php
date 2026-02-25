@extends('layouts.default')

@section('content')
<section class="content-container container">
    <h1 class="title">
        E-Report <i class="fas fa-angle-right"></i>ข้อมูลเชิงสถิติ
    </h1>

    <hr class="my-2" />

    <div class="content-wrapper">
        <div class="min-h-screen px-4">
            <a href="{{ url('/e-reports/mis/project') }}">
                <div class="content-bullet">
                    <h4 class="text-[16px]">ข้อมูลการให้บริการผ่านช่องทางออนไลน์</h4>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
            <a href="{{ url('/e-reports/mis/counselling') }}">
                <div class="content-bullet">
                    <h4 class="text-[16px]">ข้อมูลการให้บริการจุดรับบริการ</h4>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
            <a href="{{ url('/e-reports/mis/corruption') }}">
                <div class="content-bullet">
                    <h4 class="text-[16px]">ข้อมูลเชิงสถิติเรื่องร้องเรียนการทุจริตประจำปี</h4>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection