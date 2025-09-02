@extends('layouts.default')

@section('content')
<section class="content-container container">
    <h1 class="title">นโยบายองค์กร <i class="fas fa-angle-right"></i>นโยบายด้านการคุ้มครองข้อมูลส่วนบุคคล (PDPA)</h1>

    <hr class="my-2" />

    <div class="content-wrapper">
        <div class="min-h-screen px-4">
            <a href="{{ url('/posts/354') }}">
                <div class="content-bullet">
                    <h3>1. นโยบายการคุ้มครองข้อมูลส่วนบุคคล (Privacy Policy)</h3>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
            <a href="{{ url('/posts/355') }}">
                <div class="content-bullet">
                    <h3>2. คำประกาศเกี่ยวกับความเป็นส่วนตัว (Privacy Notice)</h3>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
            <a href="#">
                <div class="content-bullet">
                    <h3>3. บันทึกรายการประมวลผลข้อมูลส่วนบุคคล (Record of Processing Activities)</h3>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
            <a href="{{ url('/posts/356') }}">
                <div class="content-bullet">
                    <h3>4. เอกสารแสดงความยินยอม (Consent Form)</h3>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
            <a href="{{ url('/posts/357') }}">
                <div class="content-bullet">
                    <h3>5. แจ้งความยินยอมในการเก็บและใช้ข้อมูลคุกกี้ (Cookie Consent)</h3>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
            <a href="#">
                <div class="content-bullet">
                    <h3>6. ข้อตกลงการประมวลผลข้อมูลส่วนบุคคล (Data Processing Agreement)</h3>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
            <a href="#">
                <div class="content-bullet">
                    <h3>7. ข้อตกลงการแบ่งปันข้อมูลส่วนบุคคล (Data Sharing Agreement)</h3>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
            <a href="#">
                <div class="content-bullet">
                    <h3>8. ข้อตกลงการเป็นผู้ควบคุมข้อมูลส่วนบุคคลร่วม (Joint Controller Agreement)</h3>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
            <a href="{{ url('/posts/390') }}">
                <div class="content-bullet">
                    <h3>9. คำประกาศเกี่ยวกับความเป็นส่วนตัวสำหรับผู้สมัครงานและผู้ปฏิบัติงาน</h3>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
            <a href="#">
                <div class="content-bullet">
                    <h3>10. หนังสือแจ้งเหตุการละเมิดข้อมูลส่วนบุคคล (Personal Data Breach Notification)</h3>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
            <a href="{{ url('/posts/157') }}">
                <div class="content-bullet">
                    <h3>11. แบบคำร้องขอใช้สิทธิของเจ้าของข้อมูลส่วนบุคคล (Data Subject Rights Request Form)</h3>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
            <a href="#">
                <div class="content-bullet">
                    <h3>12. หนังสือตอบกลับการใช้สิทธิของเจ้าของข้อมูลส่วนบุคคล (Data Subject Rights Responding)</h3>
                    <span><i class="fas fa-angle-down"></i></span>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection