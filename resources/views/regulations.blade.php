@extends('layouts.default')

@section('content')
<article class="container">
    <h1 class="title">กฎหมาย/ระเบียบ/ข้อบังคับ</h1>

    <hr class="my-2" />

    <div class="content-wrapper">
        <div class="min-h-screen p-4">
            <div>
                <h2 class="text-xl">กฎหมาย/พรบ.</h2>

                <a href="{{ url('/posts/446') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">พระราชบัญญัติสุขภาพจิต พ.ศ. 2551</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/posts/447') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">พระราชบัญญัติสุขภาพจิต พ.ศ.2551 และที่แก้ไขเพิ่มเติม ฉบับที่ 2 พ.ศ. 2562</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/posts/448') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">พระราชบัญญัติฟื้นฟูสมรรถภาพผู้ติดยาเสพติด พ.ศ. 2545</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/posts/452') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">พระราชบัญญัติหลักประกันสุขภาพแห่งชาติ พ.ศ. 2545</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/posts/453') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">พระราชบัญญัติประกันสังคม พ.ศ. 2553</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/posts/455') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">พระราชบัญญัติการรักษาความมั่นคงปลอดภัยไซเบอร์ พ.ศ. 2562</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/posts/456') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">พระราชบัญญัติคุ้มครองข้อมูลส่วนบุคคล พ.ศ. 2562</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/posts/454') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">พระราชบัญญัติข้อมูลข่าวสารของราชการ พ.ศ. 2540</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
            </div>

            <div class="mt-4">
                <h2 class="text-xl">ระเบียบ</h2>

                <a href="{{ url('/posts/449') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">ระเบียบกระทรวงสาธารณสุขว่าด้วยการคุ้มครองและจัดการข้อมูลด้านสุขภาพของบุคคล พ.ศ. 2561</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/posts/450') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">ระเบียบกระทรวงการคลังว่าด้วยการจัดซื้อจัดจ้างและการบริหารพัสดุภาครัฐ พ.ศ. 2560</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/posts/457') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">ระเบียบกระทรวงสาธารณสุขว่าด้วยเงินบำรุงของหน่วยบริการในสังกัดกระทรวงสาธารณสุข พ.ศ. 2561</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/posts/458') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">ระเบียบว่าด้วยการบริหารงบประมาณ พ.ศ. 2548</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
            </div>

            <div class="mt-4">
                <h2 class="text-xl">กฎกระทรวง</h2>

                <a href="{{ url('/posts/451') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">กฎกระทรวงแบ่งส่วนราชการ กรมสุขภาพจิต พ.ศ. 2560</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
            </div>

            <div class="mt-4">
                <h2 class="text-xl">ข้อบังคับ</h2>

                <!-- <a href="{{ url('/posts/412') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">3.1 คำสั่งแต่งตั้งคณะทำงานจัดทำและขับเคลื่อนแผนปฏิบัติการส่งเสริมคุณธรรมของหน่วยงาน ประจำปีงบประมาณ พ.ศ. 2569</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a> -->
            </div>

        </div>
    </div>
</article>
@endsection