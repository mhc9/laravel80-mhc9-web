@extends('layouts.default')

@section('content')
<section class="executives container">
    <h1 class="title">ผู้บริหารหน่วยงาน</h1>

    <hr class="my-2" />

    <div>

        <!-- ผู้บริหารกรมฯ -->
        <div class="px-8 mb-4">
            <div class="my-4 flex flex-col justify-center items-center">
                @include('components.avatar', [
                    'size'      => "120px",
                    'imageUrl'  => "https://www.mhc9dmh.com/newweb/public/img/kittisak.jpg"
                ])
                <div class="mt-2 flex flex-col justify-center items-center">
                    <h3 class="font-bold text-xl">นายแพทย์กิตติศักดิ์ อักษรวงศ์</h3>
                    <h4 class="font-bold text-lg">อธิบดีกรมสุขภาพจิต</h4>
                    <h5 class="font-normal text-base">โทรศัพท์ 02 590 8009</h5>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-md-4">
                    <div class="flex flex-col justify-center items-center">
                        @include('components.avatar', [
                            'size'      => "120px",
                            'imageUrl'  => "https://www.mhc9dmh.com/newweb/public/img/dmh6n.jpg"
                        ])
                        <div class="mt-2 flex flex-col justify-center items-center">
                            <h3 class="font-bold text-xl">นายแพทย์จุมภฎ พรมสีดา</h3>
                            <h4 class="font-semibold text-lg">รองอธิบดีกรมสุขภาพจิต</h4>
                            <h5 class="font-normal text-base">โทรศัพท์ 02 590 8015</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="flex flex-col justify-center items-center">
                        @include('components.avatar', [
                            'size'      => "120px",
                            'imageUrl'  => "https://www.mhc9dmh.com/newweb/public/img/dmh7n.jpg"
                        ])
                        <div class="mt-2 flex flex-col justify-center items-center">
                            <h3 class="font-bold text-xl">นายแพทย์ศิริศักดิ์ ธิติดิลกรัตน์</h3>
                            <h4 class="font-semibold text-lg">รองอธิบดีกรมสุขภาพจิต</h4>
                            <h5 class="font-normal text-base">โทรศัพท์ 02 590 8014</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="flex flex-col justify-center items-center">
                        @include('components.avatar', [
                            'size'      => "120px",
                            'imageUrl'  => "https://www.mhc9dmh.com/newweb/public/img/nichapa.jpg"
                        ])
                        <div class="mt-2 flex flex-col justify-center items-center">
                            <h3 class="font-bold text-xl">แพทย์หญิงณิชาภา สวัสดิกานนท์</h3>
                            <h4 class="font-semibold text-lg">รองอธิบดีกรมสุขภาพจิต</h4>
                            <h5 class="font-normal text-base">โทรศัพท์ -</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ศูนย์สุขภาพจิตที่ 9 -->
        <div class="executives-wrapper">
            <div class="director-wrapper">
                @include('components.avatar', [
                    'size'      => "120px",
                    'imageUrl'  => "https://www.mhc9dmh.com/data/photo/boss67.jpg"
                ])
                <div class="mt-2">
                    <h3>นายนิตย์ ทองเพชรศรี</h3>
                    <h4>ผู้อำนวยการศูนย์สุขภาพจิตที่ 9</h4>
                    <h5 class="font-thin text-base">โทรศัพท์ 09 7918 6374</h5>
                </div>
            </div>
            <div class="row vice-wrapper">
                <div class="col-md-6">
                    <div class="flex flex-col justify-center items-center">
                        @include('components.avatar', [
                            'size'      => "120px",
                            'imageUrl'  => "https://www.mhc9dmh.com/data/photo/19Img.jpg"
                        ])
                        <div class="mt-2">
                            <h3>นางณัฏฐา ศิริผล</h3>
                            <h4>หัวหน้ากลุ่มงานอำนวยการ</h4>
                            <h5>โทรศัพท์ 08 7863 6634</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="flex flex-col justify-center items-center">
                        @include('components.avatar', [
                            'size'      => "120px",
                            'imageUrl'  => "https://www.mhc9dmh.com/data/photo/9Img.jpg"
                        ])
                        <div class="mt-2">
                            <h3>นางสาววรวรรณ หนึ่งด่านจาก</h3>
                            <h4>หัวหน้ากลุ่มงานวิชาการสุขภาพจิต</h4>
                            <h5>โทรศัพท์ 08 1266 6053</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection