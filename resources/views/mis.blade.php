@extends('layouts.default')

@section('content')
<section class="content-container container">
    <h1 class="title">
        ข้อมูลเชิงสถิติการให้บริการ
    </h1>

    <hr class="my-2" />

    <div class="content-wrapper">
        <a href="{{ url('/') }}">
            <div class="content-bullet">
                <h3>จำนวนผู้เข้าร่วมโครงการประจำปี</h3>
                <span><i class="fas fa-angle-down"></i></span>
            </div>
        </a>
        <a href="{{ url('/') }}">
            <div class="content-bullet">
                <h3>จำนวนเรื่องร้องเรียนการทุจริตประจำปี</h3>
                <span><i class="fas fa-angle-down"></i></span>
            </div>
        </a>
    </div>
</section>
@endsection