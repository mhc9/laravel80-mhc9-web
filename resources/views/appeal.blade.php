@extends('layouts.default')

@section('content')
<article class="container">
    <h1 class="title">ศูนย์ราชการใสสะอาด</h1>

    <hr class="my-2" />

    <div class="content-wrapper">
        <div class="min-h-screen p-4">
            <a href="{{ url('/posts/64') }}">
                <div class="content-bullet">
                    <h3>แนวทางจัดการข้อร้องเรียน</h3>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
            <a href="{{ url('/posts/43') }}">
                <div class="content-bullet">
                    <h3>ช่องทางการร้องเรียน</h3>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
            <a href="{{ url('/posts/87') }}">
                <div class="content-bullet">
                    <h3>การเปิดโอกาสให้เกิดการมีส่วนร่วม</h3>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
            <a href="{{ url('/posts/85') }}">
                <div class="content-bullet">
                    <h3>การประเมินความเสี่ยงการทุจริตประจำปี</h3>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
            <a href="{{ url('/posts/86') }}">
                <div class="content-bullet">
                    <h3>การดำเนินการเพื่อจัดการความเสี่ยงการทุจริต</h3>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
            <a href="{{ url('/appeal/culture') }}">
                <div class="content-bullet">
                    <h3>กิจกรรมส่งเสริมวัฒนธรรมองค์กร</h3>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
            <a href="{{ url('/posts/97') }}">
                <div class="content-bullet">
                    <h3>แผนปฏิบัติการป้องกันการทุจริตประจำปี</h3>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
            <a href="{{ url('/posts/84') }}">
                <div class="content-bullet">
                    <h3>รายงานการกำกับติดตามการดำเนินการป้องกันการทุจริต</h3>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
            <a href="{{ url('/posts/83') }}">
                <div class="content-bullet">
                    <h3>รายงานผลการดำเนินการป้องกันการทุจริตประจำปี</h3>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
            <a href="{{ url('/posts/82') }}">
                <div class="content-bullet">
                    <h3>รายงานผลการวิเคราะห์แบบสำรวจความคิดเห็นด้านคุณธรรมและความโปร่งใสประจำปี</h3>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
        </div>
    </div>
</article>
@endsection