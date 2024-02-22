@extends('layouts.default')

@section('content')
<section class="structure container">
    <h1 class="title">โครงสร้างองค์กร</h1>

    <hr class="my-2" />

    <div class="structure-wrapper">
        <div class="level-1 rectangle">
            @include('components.avatar', [
                'size'      => "80px",
                'imageUrl'  => "https://www.mhc9dmh.com/data/photo/boss67.jpg"
            ])
            <div class="box-label">
                <h2>นายนิตย์ ทองเพชรศรี</h2>
                <h3>ผู้อำนวยการศูนย์สุขภาพจิตที่ 9</h3>
            </div>
        </div>
        <ol class="level-2-wrapper">
            <li>
                <div class="level-2 rectangle">
                    @include('components.avatar', [
                        'size'      => "70px",
                        'imageUrl'  => "https://www.mhc9dmh.com/data/photo/19Img.jpg"
                    ])
                    <div class="box-label">
                        <h2 class="my-[2px]">นางณัฏฐา ศิริผล</h2>
                        <h3 class="my-[2px]">นักจัดการงานทั่วไปชำนาญการ</h3>
                        <h4 class="my-[2px]">หัวหน้ากลุ่มงานอำนวยการ</h4>
                    </div>
                </div>
                <!-- {/* <ol class="level-3-wrapper border">
                    <li> */} -->
                        <!-- {/* <h3 class="level-3 rectangle">หัวหน้ากลุ่มงานอำนวยการ</h3> */} -->
                        <ol class="level-4-wrapper">
                            <li>
                                <div class="level-4 rectangle">
                                    @include('components.avatar', ['size' => "", 'imageUrl'  => "https://www.mhc9dmh.com/data/photo/7Img.jpg"])
                                    <div class="box-label">
                                        <h2 class="my-[2px]">นางณิชาดา ศรีทองเพ็ชร</h2>
                                        <h3 class="my-[2px]">นักจัดการงานทั่วไป</h3>
                                        <h4 class="my-[2px]">งานธุรการ</h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="level-4 rectangle">
                                    @include('components.avatar', ['size' => "", 'imageUrl'  => "https://www.mhc9dmh.com/data/photo/13Img.jpg"])
                                    <div class="box-label">
                                        <h2 class="my-[2px]">น.ส.ศรัณยาพร สุริยะกุลพงษ์</h2>
                                        <h3 class="my-[2px]">นักจัดการงานทั่วไป</h3>
                                        <h4 class="my-[2px]">งานทรัพยากรบุคคล</h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="level-4 rectangle">
                                    @include('components.avatar', ['size' => "", 'imageUrl'  => "https://www.mhc9dmh.com/data/photo/2152Img.jpg"])
                                    <div class="box-label">
                                        <h2 class="my-[2px]">น.ส.เมลดา จาติกานนท์</h2>
                                        <h3 class="my-[2px]">เจ้าพนักงานการเงินและบัญชีปฏิบัติงาน</h3>
                                        <h4 class="my-[2px]">งานการเงินและบัญชี</h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="level-4 rectangle">
                                    @include('components.avatar', ['size' => "", 'imageUrl'  => "https://www.mhc9dmh.com/data/photo/1624Img.jpg"])
                                    <div class="box-label">
                                        <h2 class="my-[2px]">น.ส.สิรินดา วิถีธรรม</h2>
                                        <h3 class="my-[2px]">นักวิชาการเงินและบัญชี</h3>
                                        <h4 class="my-[2px]">งานการเงินโครงการ</h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="level-4 rectangle">
                                    @include('components.avatar', ['size' => "", 'imageUrl'  => "https://www.mhc9dmh.com/data/photo/2118Img.jpg"])
                                    <div class="box-label">
                                        <h2 class="my-[2px]">น.ส.ทิพปภา สีมาธรรมการย์</h2>
                                        <h3 class="my-[2px]">นักวิชาการพัสดุ</h3>
                                        <h4 class="my-[2px]">งานพัสดุ</h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="level-4 rectangle">
                                    @include('components.avatar', ['size' => "", 'imageUrl'  => "https://www.mhc9dmh.com/data/photo/2258Img.jpg"])
                                    <div class="box-label">
                                        <h2 class="my-[2px]">นายสัญญา ธรรมวงษ์</h2>
                                        <h3 class="my-[2px]">นักวิชาการคอมพิวเตอร์ปฏิบัติการ</h3>
                                        <h4 class="my-[2px]">งานเทคโนโลยีสารสนเทศ</h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="level-4 rectangle">
                                    @include('components.avatar', ['size' => "", 'imageUrl'  => "https://www.mhc9dmh.com/data/photo/5Img.jpg"])
                                    <div class="box-label">
                                        <h2 class="my-[2px]">นายสมเกียรติ พวกกลาง</h2>
                                        <h3 class="my-[2px]">พนักงานบริการ</h3>
                                        <h4 class="my-[2px]">งานยานพาหนะ</h4>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    <!-- {/* </li>
                </ol> */} -->
            </li>
            <li>
                <div class="level-2 rectangle text-left">
                    @include('components.avatar', [
                        'size'      => "70px",
                        'imageUrl'  => "https://www.mhc9dmh.com/data/photo/9Img.jpg"
                    ])
                    <div class="box-label">
                        <h2 class="my-[2px]">นางสาววรวรรณ หนึ่งด่านจาก</h2>
                        <h3 class="my-[2px]">นักวิชาการสาธารณสุขชำนาญการ</h3>
                        <h4 class="my-[2px]">หัวหน้ากลุ่มงานวิชาการสุขภาพจิต</h4>
                    </div>
                </div>
                <ol class="level-4-wrapper">
                    <li>
                        <div class="level-4 rectangle4">
                            <!-- Avatar -->
                            <div class="box-label">
                                <!-- {/* <h2>น.ส.ทดสอบ ระบบ</h2> */} -->
                                <h4>งานพัฒนาคุณภาพ</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="level-4 rectangle4">
                            <!-- Avatar -->
                            <div class="box-label">
                                <!-- {/* <h2>น.ส.ทดสอบ ระบบ</h2> */} -->
                                <h4>งานวิจัยและพัฒนา</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="level-4 rectangle4">
                            <!-- Avatar -->
                            <div class="box-label">
                                <!-- {/* <h2>น.ส.ทดสอบ ระบบ</h2> */} -->
                                <h4>งานแผนงานและประเมินผล</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="level-4 rectangle4">
                            <!-- Avatar -->
                            <div class="box-label">
                                <!-- {/* <h2>น.ส.ทดสอบ ระบบ</h2> */} -->
                                <h4>งานพัฒนาเครือข่ายสุขภาพจิต</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="level-4 rectangle4">
                            <!-- Avatar -->
                            <div class="box-label">
                                <!-- {/* <h2>น.ส.ทดสอบ ระบบ</h2> */} -->
                                <h4>งานนิเทศและติดตาม</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="level-4 rectangle4">
                            <!-- Avatar -->
                            <div class="box-label">
                                <!-- {/* <h2>น.ส.ทดสอบ ระบบ</h2> */} -->
                                <h4>งานสุขภาพจิตกลุ่มวัย</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="level-4 rectangle4">
                            <!-- Avatar -->
                            <div class="box-label">
                                <!-- {/* <h2>น.ส.ทดสอบ ระบบ</h2> */} -->
                                <h4>งานสุขภาพจิตในระบบบริการปฐมภูมิ</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="level-4 rectangle4">
                            <!-- Avatar -->
                            <div class="box-label">
                                <!-- {/* <h2>น.ส.ทดสอบ ระบบ</h2> */} -->
                                <h4>งานวิกฤตสุขภาพจิต</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="level-4 rectangle4">
                            <!-- Avatar -->
                            <div class="box-label">
                                <!-- {/* <h2>น.ส.ทดสอบ ระบบ</h2> */} -->
                                <h4>งานเฝ้าระวังและป้องกันการฆ่าตัวตาย</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="level-4 rectangle4">
                            <!-- Avatar -->
                            <div class="box-label">
                                <!-- {/* <h2>น.ส.ทดสอบ ระบบ</h2> */} -->
                                <h4>งานสื่อสารและประชาสัมพันธ์</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="level-4 rectangle4">
                            <!-- Avatar -->
                            <div class="box-label">
                                <!-- {/* <h2>น.ส.ทดสอบ ระบบ</h2> */} -->
                                <h4>งานสุขภาพจิตระหว่างประเทศ</h4>
                            </div>
                        </div>
                    </li>
                </ol>
            </li>
        </ol>
    </div>
</section>
@endsection