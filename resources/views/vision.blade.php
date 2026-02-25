@extends('layouts.default')

@section('content')
<article class="container">
    <h1 class="title">วิสัยทัศน์/พันธกิจ/ค่านิยม/ตัวชี้วัด</h1>

    <hr class="my-2" />

    <div class="content-wrapper">
        <div class="min-h-screen vision">
            <div class="vision-wrapper">
                <h2 class="font-bold text-3xl">วิสัยทัศน์</h2>
                <blockquote class="vision-quote">
                    <p>ศูนย์สุขภาพจิตที่ 9 เป็นองค์กรหลักด้านการส่งเสริมป้องกันปัญหาสุขภาพจิตและสารเสพติด ระดับเขตสุขภาพ เพื่อประชาชนสุขภาพจิตดี สังคมเป็นสุข</p>
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
                    <p>MHC 9 : รอบรู้สุขภาพจิต คิดสร้างสรรค์ ร่วมใจกันพัฒนาเครือข่าย ก้าวสู่ความเป็นเลิศ</p>
                </blockquote>
                <ul class="text-2xl">
                    <li><span class="font-semibold">M (Mindfulness)</span> : มีสติ รอบรู้สุขภาพจิต</li>
                    <li><span class="font-semibold">H (Harmony)</span> : สามัคคี ร่วมใจ เครือข่ายเข้มแข็ง</li>
                    <li><span class="font-semibold">C (Creative Thinking)</span> :  คิดสร้างสรรค์ พัฒนาต่อเนื่อง</li>
                    <li><span class="font-semibold">9 (Nine ; Next step)</span> : ก้าวสู่ความเป็นเลิศ</li>
                </ul>
            </div>

            <div class="duty-wrapper px-10 pt-4 flex flex-col justify-center items-center gap-4">
                <h2 class="font-bold text-3xl">ตัวชี้วัด</h2>

                <div class="w-full pb-4">
                    <object
                        data="https://mhc9dmh.com/newweb/public/uploads/2026/02/02232026070144699bfb58c357c.pdf"
                        type="application/pdf"
                        width="100%"
                        height="720px"
                    >
                        <p>Unable to display PDF file.<a href="https://mhc9dmh.com/newweb/public/uploads/2026/02/02232026070144699bfb58c357c.pdf" target="_blank" class="ml-2 underline">Download</a> instead.</p>
                    </object>
                </div>
            </div>
        </div>
    </div>
</article>
@endsection