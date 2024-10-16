@extends('layouts.default')

@section('content')
<section class="content-container container">
    <h1 class="title">E-Report</h1>

    <hr class="my-2" />

    <div class="content-wrapper">
        <div class="min-h-screen px-4">
            <a href="{{ url('/e-reports/mis') }}">
                <div class="content-bullet">
                    <h3>ข้อมูลเชิงสถิติการให้บริการ</h3>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
            <a href="{{ url('/e-reports/sat-servey') }}">
                <div class="content-bullet">
                    <h3>รายงานผลสำรวจความพึงพอใจ</h3>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
            <a href="{{ url('/e-reports/data-catalog') }}">
                <div class="content-bullet">
                    <h3>บัญชีข้อมูลภาครัฐ (Data Catalog)</h3>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection