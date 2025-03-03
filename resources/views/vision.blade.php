@extends('layouts.default')

@section('content')
<section class="vision container py-6 px-0">
    <h1 class="title">วิสัยทัศน์/พันธกิจ/ค่านิยม/ตัวชี้วัด</h1>

    <hr class="my-2" />

    <div>
        <div class="vision-wrapper">
            <h2 class="font-bold text-3xl">วิสัยทัศน์</h2>
            <blockquote class="vision-quote">
                <p>ศูนย์สุขภาพจิตที่ 9 เป็นองค์กรหลักด้านการส่งเสริมป้องกันปัญหาสุขภาพจิตและสารเสพติด ระดับเขตสุขภาพ เพื่อประชาชนสุขภาพจิตดี</p>
            </blockquote>
        </div>

        <div class="duty-wrapper">
            <h2 class="font-bold text-3xl">พันธกิจ</h2>
            <div>
                <ol class="gradient-list">
                    <li>ศึกษา วิเคราะห์ วิจัยและพัฒนาองค์ความรู้ด้านการส่งเสริมสุขภาพจิตและป้องกันปัญหาสุขภาพจิตในเขตพื้นที่รับผิดชอบ</li>
                    <li>พัฒนาศักยภาพเครือข่ายในเขตพื้นที่รับผิดชอบ โดยการถ่ายทอดองค์ความรู้และเทคโนโลยีด้านสุขภาพจิต</li>
                    <li>เฝ้าระวังและวางแผนการส่งเสริม ป้องกัน และแก้ไขปัญหาสุขภาพจิตในเขตพื้นที่รับผิดชอบด้วยข้อมูลสารสนเทศด้านสุขภาพจิตที่มีคุณภาพ</li>
                    <li>นิเทศและติดตามผลการปฏิบัติงานด้านสุขภาพจิตของเครือข่ายในเขตพื้นที่รับผิดชอบ</li>
                </ol>
            </div>
        </div>

        <div class="core__values-wrapper">
            <h2 class="font-bold text-3xl">ค่านิยม</h2>
            <blockquote class="core__values-quote">
                <p>
                    มีหัวใจบริการ
                    ทำงานเป็นทีม
                    มุ่งเน้นงานคุณภาพ
                    สร้างเครือข่ายเข้มแข็ง<br />
                    ด้วยเทคโนโลยีที่ทันสมัย
                    โปร่งใสตรวจสอบได้
                </p>
            </blockquote>
        </div>

        <div class="px-10 pt-2 pb-4 flex flex-col justify-center items-center gap-4">
            <h2 class="font-bold text-3xl">ตัวชี้วัด</h2>
            <object
                data="https://mhc9dmh.com/newweb/public/uploads/2025/01/0113202504550667849caa0cd8e.pdf"
                type="application/pdf"
                width="100%"
                height="720px"
            >
                <p>Unable to display PDF file.<a href="https://mhc9dmh.com/newweb/public/uploads/2025/01/0113202504550667849caa0cd8e.pdf" target="_blank" class="ml-2 underline">Download</a> instead.</p>
            </object>
        </div>
    </div>
</section>
@endsection