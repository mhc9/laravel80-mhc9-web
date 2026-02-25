@extends('layouts.default')

@section('content')
<article class="container">
    <h1 class="title">โครงสร้างองค์กร</h1>

    <hr class="my-2" />

    <div class="content-wrapper">
        <div class="min-h-screen p-4">
            <div class="level-1 rectangle">
                @include('components.avatar', [
                    'size'      => "80px",
                    'imageUrl'  => "https://mhc9dmh.com/DATA/Photo/48Img.jpg"
                ])
                <div class="box-label">
                    <h2>นางสาวจุฑามาศ วรรณศิลป์</h2>
                    <h3>ผู้อำนวยการศูนย์สุขภาพจิตที่ 9</h3>
                    <!-- <h3>รักษาราชการแทนผู้อำนวยการศูนย์สุขภาพจิตที่ 9</h3> -->
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
                                <li>
                                    <div class="level-4 rectangle">
                                        @include('components.avatar', ['size' => "", 'imageUrl'  => "https://mhc9dmh.com/DATA/Photo/2332Img.jpg"])
                                        <div class="box-label">
                                            <h2 class="my-[2px]">นายธีรวัฒน์ ผันกลาง</h2>
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
                            <h3 class="my-[2px]">นักวิชาการสาธารณสุขชำนาญการพิเศษ</h3>
                            <h4 class="my-[2px]">รักษาการในตำแหน่งหัวหน้ากลุ่มงานวิชาการสุขภาพจิต</h4>
                            <h4 class="my-[2px]">และงานพัฒนาคุณภาพ/งานวิจัยและพัฒนา/งานนิเทศติดตาม/<br />งานเฝ้าระวังและป้องกันการฆ่าตัวตาย/งานสุขภาพจิตระหว่างประเทศ/<br />งานสารเสพติด</h4>
                        </div>
                    </div>
                    <ol class="level-4-wrapper">
                        <li>
                            <div class="level-4 rectangle4">
                                @include('components.avatar', ['imageUrl'  => "https://www.mhc9dmh.com/data/photo/39Img.jpg"])
                                <div class="box-label">
                                    <h2 class="my-[2px]">นายพนัส ศรีไชยบาล</h2>
                                    <h3 class="my-[2px]">นักสังคมสงเคราะห์ปฏิบัติการ</h3>
                                    <h4 class="my-[2px]">งานสุขภาพจิตกลุ่มวัย (งานสุขภาพจิตวัยทำงาน)</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="level-4 rectangle4">
                                @include('components.avatar', ['imageUrl'  => "https://www.mhc9dmh.com/data/photo/43Img.jpg"])
                                <div class="box-label">
                                    <h2 class="my-[2px]">น.ส.กาญจนาวดี ปินะถา</h2>
                                    <h3 class="my-[2px]">นักวิชาการสาธารณสุขชำนาญการ</h3>
                                    <h4 class="my-[2px]">งานสุขภาพจิตกลุ่มวัย (งานสุขภาพจิตผู้สูงอายุ)</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="level-4 rectangle4">
                                <div>
                                    @include('components.avatar', ['imageUrl'  => "https://www.mhc9dmh.com/data/photo/60Img.jpg"])
                                </div>
                                <div class="box-label">
                                    <h2 class="my-[2px]">น.ส.พนิดา นครานุรักษ์</h2>
                                    <h3 class="my-[2px]">นักวิชาการสาธารณสุขปฏิบัติการ</h3>
                                    <h4 class="my-[2px]">งานวิกฤตสุขภาพจิต/งานพระราชบัญญัติสุขภาพจิต</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="level-4 rectangle4">
                                @include('components.avatar', ['imageUrl'  => "https://www.mhc9dmh.com/data/photo/2133Img.jpg"])
                                <div class="box-label">
                                    <h2 class="my-[2px]">น.ส.นุชนาฏ ชิดตะคุ</h2>
                                    <h3 class="my-[2px]">นักวิชาการสาธารณสุขชำนาญการ</h3>
                                    <!-- <h4 class="my-[2px]">งานสุขภาพจิตวัยเรียน/วัยรุ่น</h4> -->
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="level-4 rectangle4">
                                <div>
                                    @include('components.avatar', ['imageUrl'  => "https://www.mhc9dmh.com/data/photo/2306Img.jpg"])
                                </div>
                                <div class="box-label">
                                    <h2 class="my-[2px]">น.ส.ปฐมาภรณ์ สุทธิคีรีสุข</h2>
                                    <h3 class="my-[2px]">นักวิชาการสาธารณสุขปฏิบัติการ</h3>
                                    <h4 class="my-[2px]">งานสุขภาพจิตในระบบบริการปฐมภูมิ/งานพัฒนาเครือข่ายสุขภาพจิต/งานแผนงานและประเมินผล</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="level-4 rectangle4">
                                @include('components.avatar', ['imageUrl'  => "https://www.mhc9dmh.com/data/photo/2292Img.jpg"])
                                <div class="box-label">
                                    <h2 class="my-[2px]">น.ส.ภัทราพร ตันนุกูล</h2>
                                    <h3 class="my-[2px]">นักวิชาการสาธารณสุขปฏิบัติการ</h3>
                                    <h4 class="my-[2px]">งานสุขภาพจิตกลุ่มวัย (งานสุขภาพจิตปฐมวัย)</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="level-4 rectangle4">
                                <div>
                                    @include('components.avatar', ['imageUrl'  => "https://www.mhc9dmh.com/data/photo/2320Img.jpg"])
                                </div>
                                <div class="box-label">
                                    <h2 class="my-[2px]">น.ส.เบญจมาภรณ์ จงกลนิธารณ์</h2>
                                    <h3 class="my-[2px]">นักวิชาการสาธารณสุขปฏิบัติการ</h3>
                                    <h4 class="my-[2px]">งานสร้างความรอบรู้สุขภาพจิตสื่อสารและประชาสัมพันธ์</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="level-4 rectangle4">
                                <div>
                                    @include('components.avatar', ['imageUrl'  => "https://www.mhc9dmh.com/data/photo/2330Img.jpg"])
                                </div>
                                <div class="box-label">
                                    <h2 class="my-[2px]">น.ส.จุฬารัตน์ ไชยดีจันทร์</h2>
                                    <h3 class="my-[2px]">นักวิชาการสาธารณสุขปฏิบัติการ</h3>
                                    <h4 class="my-[2px]">งานสุขภาพจิตในระบบบริการปฐมภูมิ</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="level-4 rectangle4">
                                <div>
                                    @include('components.avatar', ['imageUrl'  => "https://mhc9dmh.com/DATA/Photo/2338Img.JPG"])
                                </div>
                                <div class="box-label">
                                    <h2 class="my-[2px]">นางสาวธัญวรรณ ประจิตร</h2>
                                    <h3 class="my-[2px]">นักจิตวิทยา</h3>
                                    <h4 class="my-[2px]">งานศูนย์ให้การปรึกษาสุขภาพจิต</h4>
                                </div>
                            </div>
                        </li>
                    </ol>
                </li>
            </ol>
        </div>
    </div>
</article>

<!-- Modal -->
<div class="modal fade" id="officerModal" tabindex="-1" aria-labelledby="officerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="officerModalLabel">งานสุขภาพจิตกลุ่มวัย</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-3">
                        <div class="h-[240px] w-full flex flex-col justify-center items-center p-4">
                            @include('components.avatar', ['imageUrl'  => "https://www.mhc9dmh.com/data/photo/2292Img.jpg"])
                            <div class="box-label text-center">
                                <h2 class="my-[2px]">น.ส.ภัทราพร ตันนุกูล</h2>
                                <h3 class="my-[2px]">นักวิชาการสาธารณสุขปฏิบัติการ</h3>
                                <h4 class="my-[2px]">งานสุขภาพจิตกลุ่มวัย (งานสุขภาพจิตปฐมวัย)</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="h-[240px] w-full flex flex-col justify-center items-center p-4">
                            @include('components.avatar', ['size' => '70px', 'imageUrl'  => "https://www.mhc9dmh.com/data/photo/2133Img.jpg"])
                            <div class="box-label text-center">
                                <h2 class="my-[2px]">น.ส.นุชนาฏ ชิดตะคุ</h2>
                                <h3 class="my-[2px]">นักวิชาการสาธารณสุขปฏิบัติการ</h3>
                                <h4 class="my-[2px]">งานสุขภาพจิตกลุ่มวัย (งานสุขภาพจิตวัยเรียน/วัยรุ่น)</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="h-[240px] w-full flex flex-col justify-center items-center p-4">
                            @include('components.avatar', ['size' => '70px', 'imageUrl'  => "https://www.mhc9dmh.com/data/photo/39Img.jpg"])
                            <div class="box-label text-center">
                                <h2 class="my-[2px]">นายพนัส ศรีไชยบาล</h2>
                                <h3 class="my-[2px]">นักสังคมสงเคราะห์ปฏิบัติการ</h3>
                                <h4 class="my-[2px]">งานสุขภาพจิตกลุ่มวัย (งานสุขภาพจิตวัยทำงาน)</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="h-[240px] w-full flex flex-col justify-center items-center p-4">
                            @include('components.avatar', ['size' => '70px', 'imageUrl'  => "https://www.mhc9dmh.com/data/photo/43Img.jpg"])
                            <div class="box-label text-center">
                                <h2 class="my-[2px]">น.ส.กาญจนาวดี ปินะถา</h2>
                                <h3 class="my-[2px]">นักวิชาการสาธารณสุขปฏิบัติการ</h3>
                                <h4 class="my-[2px]">งานสุขภาพจิตกลุ่มวัย (งานสุขภาพจิตผู้สูงอายุ)</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection