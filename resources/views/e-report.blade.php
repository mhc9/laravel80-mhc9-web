@extends('layouts.default')

@section('content')
<section class="policies container">
    <h1 class="title">E-Report</h1>

    <hr class="my-2" />

    <div class="policies-wrapper">
        <a href="#">
            <div class="policy">
                <h3>ขอมูลเชิงสถิติการให้บริการ</h3>
                <span><i class="fas fa-angle-down"></i></span>
            </div>
        </a>
        <a href="{{ url('/sat-servey') }}">
            <div class="policy">
                <h3>รายงานผลสำรวจความพึงพอใจ</h3>
                <span><i class="fas fa-angle-down"></i></span>
            </div>
        </a>
    </div>
</section>
@endsection