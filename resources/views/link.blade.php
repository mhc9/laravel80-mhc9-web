@extends('layouts.default')

@section('content')
<section class="links container">
    <h1 class="title">ลิงค์ที่เกี่ยวข้อง</h1>

    <hr class="my-2" />

    <div class="links-wrapper">
        <ul>
            <li><a href="https://www.moph.go.th" target="_blank">กระทรวงสาธารณสุข</a></li>
            <li><a href="https://dmh.go.th" target="_blank">กรมสุขภาพจิต</a></li>
            <li>
                <a href="#" target="_self">กลุ่มศูนย์สุขภาพจิต กรมสุขภาพจิต</a>
                <ul>
                    <li><a href="http://mhc01.net" target="_blank">ศูนย์สุขภาพจิต 1 เชียงใหม่</a></li>
                    <li><a href="https://www.mhc2.go.th" target="_blank">ศูนย์สุขภาพจิต 2 พิษณุโลก</a></li>
                    <li><a href="http://www.mhc03.go.th" target="_blank">ศูนย์สุขภาพจิต 3 นครสวรรค์</a></li>
                    <li><a href="https://mhc4.dmh.go.th" target="_blank">ศูนย์สุขภาพจิต 4 ปทุมธานี</a></li>
                    <li><a href="https://mhc5.dmh.go.th" target="_blank">ศูนย์สุขภาพจิต 5 สมุทรสงคราม</a></li>
                    <li><a href="https://mhc6.dmh.go.th" target="_blank">ศูนย์สุขภาพจิต 6 ชลบุรี</a></li>
                    <li><a href="https://mhc7.dmh.go.th" target="_blank">ศูนย์สุขภาพจิต 7 ขอนแก่น</a></li>
                    <li><a href="https://www.mhc8.go.th" target="_blank">ศูนย์สุขภาพจิต 8 อุดรธานี</a></li>
                    <li><a href="{{ url('/') }}" target="_blank">ศูนย์สุขภาพจิต 9 นครราชสีมา</a></li>
                    <li><a href="https://www.mhc10.go.th" target="_blank">ศูนย์สุขภาพจิต 10 อุบลราชธานี</a></li>
                    <li><a href="https://www.mhc11.go.th" target="_blank">ศูนย์สุขภาพจิต 11 สุราษฎร์ธานี</a></li>
                    <li><a href="https://mhc12.dmh.go.th" target="_blank">ศูนย์สุขภาพจิต 12 สงขลา</a></li>
                    <li><a href="https://mhc13.dmh.go.th" target="_blank">ศูนย์สุขภาพจิต 13 กรุงเทพมหานคร</a></li>
                </ul>
            </li>                    
            <li><a href="https://www.jvkorat.go.th" target="_blank">โรงพยาบาลจิตเวชนครราชสีมาราชนครินทร์</a></li>
            <li><a href="http://www.r9health.org" target="_blank">สำนักงานเขตสุขภาพที่ 9</a></li>
            <li><a href="https://www.mnrh.go.th/th" target="_blank">โรงพยาบาลมหาราชนครราชสีมา</a></li>
            <li><a href="http://www.korathealth.com" target="_blank">สำนักงานสาธารณสุขจังหวัดนครราชสีมา</a></li>
            <li><a href="https://cpho.moph.go.th" target="_blank">สำนักงานสาธารณสุขจังหวัดชัยภูมิ</a></li>
            <li><a href="https://bro.moph.go.th" target="_blank">สำนักงานสาธารณสุขจังหวัดบุรีรัมย์</a></li>
            <li><a href="https://surin.moph.go.th" target="_blank">สำนักงานสาธารณสุขจังหวัดสุรินทร์</a></li>
        </ul>
    </div>
</section>
@endsection