@extends('layouts.default')

@section('content')
<section class="content-container container">
    <h1 class="title">ศูนย์ข้อมูลข่าวสาร</h1>

    <hr class="my-2" />

    <div class="content-wrapper">
        <div class="min-h-screen px-4 mb-4">
            <div>
                <h3>มาตรา 7</h3>

                <a href="{{ url('/') }}">
                    <div class="content-bullet">
                        <h3>โครงสร้างองค์กร ม.7 (1)</h3>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/') }}">
                    <div class="content-bullet">
                        <h3>อำนาจหน้าที่ ม.7 (2)</h3>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/') }}">
                    <div class="content-bullet">
                        <h3>สถานที่ติดต่อ ม.7 (3)</h3>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/') }}">
                    <div class="content-bullet">
                        <h3>กฎ มติคณะรัฐมนตรี ข้อบังคับ คำสั่ง ม.7 (4)</h3>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
            </div>

            <div class="mt-4">
                <h3>มาตรา 9</h3>

                <a href="{{ url('/') }}">
                    <div class="content-bullet">
                        <h3>ผลการพิจารณาที่มีผลโดยตรงต่อเอกชน ม.9 (1)</h3>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/') }}">
                    <div class="content-bullet">
                        <h3>นโยบายหรือการตีความที่ไม่เข้าข่ายต้องลงพิมพ์ในราชกิจจานุเบกษา ม.9 (2)</h3>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/') }}">
                    <div class="content-bullet">
                        <h3>แผนงาน โครงการ และงบประมาณรายจ่ายประจำปีที่กำลังดำเนินการ ม.9 (3)</h3>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/') }}">
                    <div class="content-bullet">
                        <h3>คู่มือหรือคำสั่งเกี่ยวกับวิธีปฏิบัติงานของเจ้าหน้าที่ของรัฐ ม.9 (4)</h3>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/') }}">
                    <div class="content-bullet">
                        <h3>สิ่งพิมพ์ ม.9 (5)</h3>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/') }}">
                    <div class="content-bullet">
                        <h3>สัญญาสัมปทาน ม.9 (6)</h3>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/') }}">
                    <div class="content-bullet">
                        <h3>มติคณะรัฐมนตรี หรือมติคณะกรรมการที่แต่งตั้งโดยกฎหมาย ม.9 (7)</h3>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/') }}">
                    <div class="content-bullet">
                        <h3>ข้อมูลข่าวสารอื่นๆ ม.9 (8)</h3>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection