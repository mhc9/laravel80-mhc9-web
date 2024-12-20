@extends('layouts.default')

@section('content')
<section class="content-container container">
    <h1 class="title">องค์กรคุณธรรมต้นแบบ</h1>

    <hr class="my-2" />

    <div class="content-wrapper">
        <div class="min-h-screen px-4 mb-4">
            <div class="text-lg text-center font-bold mb-3">การดำเนินการเป็นองค์กรคุณธรรมต้นแบบ ประจำปีงบประมาณ พ.ศ. 2568 ของศูนย์สุขภาพจิตที่ 9 กรมสุขภาพจิต</div>

            <div>
                <h2 class="text-xl">1. ประกาศเจตนารมณ์ของผู้บริหารและบุคลากรขององค์กร</h2>

                <a href="{{ url('/posts/210') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">1.1 ประกาศเจตนารมณ์ร่วมกันในการขับเคลื่อนหน่วยงานให้เป็นองค์กรคุณธรรมต้นแบบ</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/posts/211') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">1.2 ประกาศเจตนารมณ์ร่วมกันในการต่อต้านการทุจริตและไม่รับของขวัญและของกำนัลทุกชนิดจากการปฏิบัติหน้าที่ (No Gift Policy)</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/posts/212') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">1.3 ประกาศเจตนารมณ์การป้องกันและแก้ไขปัญหาการแสวงหาประโยชน์ทางเพศ และการคุกคามทางเพศในการทำงาน</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
            </div>

            <div class="mt-4">
                <h2 class="text-xl">2. กำหนดคุณธรรมเป้าหมาย</h2>

                <a href="{{ url('/') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">การกำหนดคุณธรรมเป้าหมายจาก “ปัญหาที่อยากแก้” และ “ความดีที่อยากทำ”</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
            </div>

            <div class="mt-4">
                <h2 class="text-xl">3. แผนการดำเนินงานตามเป้าหมาย</h2>

                <a href="{{ url('/posts/213') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">3.1 คำสั่งแต่งตั้งคณะทำงานจัดทำและขับเคลื่อนแผนปฏิบัติการส่งเสริมคุณธรรมของหน่วยงาน</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">3.1 แผนปฏิบัติการส่งเสริมคุณธรรมของหน่วยงาน</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
            </div>

            <div class="mt-4">
                <h2 class="text-xl">4. ผลสำเร็จของการดำเนินกิจกรรมตามแผนปฏิบัติการฯ</h2>

                <a href="{{ url('/') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">4.1 รายงานผลการดำเนินการตามแผนปฏิบัติการส่งเสริมคุณธรรมของหน่วยงาน รอบ 6 เดือน</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">4.2 รายงานผลสำเร็จของการดำเนินการกิจกรรมตามแผนปฏิบัติการฯ (ไม่น้อยกว่าร้อยละ 70)</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
            </div>

            <div class="mt-4">
                <h2 class="text-xl">5. กิจกรรมถอดบทเรียนจากาการดำเนินงานองค์กรคุณธรรมต้นแบบ</h2>

                <a href="{{ url('/') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">5.1 กิจกรรมถอดบทเรียนการดำเนินงานเป็นองค์กรคุณธรรมต้นแบบ</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">5.2 การปรับแผนปฏิบัติการส่งเสริมคุณธรรมฯ</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
            </div>

            <div class="mt-4">
                <h2 class="text-xl">6. กิจกรรมยกย่อง เชิดชู บุคลากร และกลุ่ม/กลุ่มงาน ที่ทำความดีเป็นแบบอย่าง</h2>

                <a href="{{ url('/') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">6.1 กิจกรรมยกย่อง เชิดชู บุคลากร และหน่วยงานภายในองค์กร</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                <a href="{{ url('/') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">6.1 การประชาสัมพันธ์ผ่านช่องทางการสื่อสาร</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
            </div>

            <div class="mt-4">
                <h2 class="text-xl">7. ผลสำเร็จของการดำเนินงาน</h2>

                <a href="{{ url('/') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">7.1 รายงานผลสำเร็จของการดำเนินกิจกรรมตามแผนปฏิบัติการฯ (ไม่น้อยกว่าร้อยละ 70)</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">7.2 รายงานผลการประเมินพฤติกรรมที่เปลี่ยนแปลงตามคุณธรรมเป้าหมาย 5 ประการ พอเพียง วินัย สุจริต จิตอาสา กตัญญู</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
            </div>

            <div class="mt-4">
                <h2 class="text-xl">8. องค์ความรู้หรือผลสำเร็จการดำเนินกิจกรรม</h2>

                <a href="{{ url('/') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">8.1 เอกสารองค์ความรู้หรือผลกสำเร็จการดำเนินกิจกรรมตามแผนปฏิบัติการส่งเสริมคุณธรรมของหน่วยงาน</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">8.2 ผลการประเมินองค์กรคุณธรรมต้นแบบของหน่วยงาน</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
            </div>

            <div class="mt-4">
                <h2 class="text-xl">9. เอกสารองค์ความรู้หรือผลสำเร็จการดำเนินกิจกรรม</h2>

                <a href="{{ url('/') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">9.1 กิจกรรมเผยแพร่เอกสารองค์ความรู้หรือผลสำเร็จการดำเนินกิจกรรมผ่านช่องทางการสื่อสาร</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="{{ url('/') }}">
                    <div class="content-bullet">
                        <h4 class="text-[16px]">9.2 รายงานผลการดำเนินการตามแผนปฏิบัติการส่งเสริมคุณธรรมของหน่วยงาน รอบ 12 เดือน</h4>
                        <span><i class="fas fa-angle-down"></i></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection