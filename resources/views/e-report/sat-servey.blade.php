@extends('layouts.default')

@section('content')
<section class="content-container container">
    <h1 class="title">สรุปผลความพึงพอใจ</h1>

    <hr class="my-2" />

    <div class="content-wrapper">
        <a href="{{ url('/posts/88') }}">
            <div class="content-bullet">
                <h3>สรุปผลความพึงพอใจของผู้รับบริการต่อการบริการ (ผู้รับบริการ)</h3>
                <span><i class="fas fa-angle-down"></i></span>
            </div>
        </a>
        <a href="{{ url('/posts/89') }}">
            <div class="content-bullet">
                <h3>สรุปผลความพึงพอใจของผู้รับบริการต่อการบริการ (เครือข่าย สธ.)</h3>
                <span><i class="fas fa-angle-down"></i></span>
            </div>
        </a>
    </div>
</section>
@endsection