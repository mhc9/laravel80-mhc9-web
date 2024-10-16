@extends('layouts.default')

@section('content')
<section class="content-container container">
    <h1 class="title">
        E-Report <i class="fas fa-angle-right"></i>ข้อมูลเชิงสถิติการให้บริการ
    </h1>

    <hr class="my-2" />

    <div class="content-wrapper">
        <div class="min-h-screen px-4">
            <a href="{{ url('/e-reports/mis/project') }}">
                <div class="content-bullet">
                    <h3>จำนวนผู้เข้าร่วมโครงการประจำปี</h3>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
            <a href="{{ url('/e-reports/mis/corruption') }}">
                <div class="content-bullet">
                    <h3>จำนวนเรื่องร้องเรียนการทุจริตประจำปี</h3>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection