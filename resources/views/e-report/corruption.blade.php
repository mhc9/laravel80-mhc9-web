@extends('layouts.default')

@section('content')
<section class="content-container container">
    <h1 class="title">
        E-Report <i class="fas fa-angle-right"></i>ข้อมูลเชิงสถิติ <i class="fas fa-angle-right"></i>ข้อมูลเชิงสถิติเรื่องร้องเรียนการทุจริตประจำปี
    </h1>

    <hr class="my-2" />

    <div class="content-wrapper p-4">
        <div class="min-h-screen">
            <div class="flex flex-col justify-center items-center mb-2">
                <h3 class="text-center">รายงานประจำปีงบประมาณ 2568<br />ศูนย์สุขภาพจิตที่ 9 กรมสุขภาพจิต</h3>
                <h5>ประจำปีงบประมาณ 2568 (ข้อมูลตั้งแต่ 1 ตุลาคม 2567 - 30 กันยายน 2568)</h5>
            </div>

            <table class="table table-bordered table-striped table-hover text-lg">
                <thead>
                    <tr>
                        <th class="text-center" rowspan="2">ประจำเดือน</th>
                        <th class="text-center" colspan="2">จำนวนข้อร้องเรียนที่รับไว้พิจารณา</th>
                        <th class="text-center w-[10%]" rowspan="2">จำนวนเรื่องร้องเรียน<br />ทั้งหมด</th>
                        <th class="text-center w-[10%]" rowspan="2">จำนวนเรื่องที่<br />ดำเนินการแล้วเสร็จ</th>
                        <th class="text-center w-[10%]" rowspan="2">จำนวนเรื่องที่<br />อยู่ระหว่างดำเนินการ</th>
                        <th class="text-center w-[15%]" rowspan="2">หมายเหตุ</th>
                    </tr>
                    <tr>
                        <th class="text-center w-[10%]">ทุจริตต่อหน้าที่</th>
                        <th class="text-center w-[10%]">ประพฤติมิชอบ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($months as $month)
                        <tr>
                            <td class="text-center">{{ $month }}</td>
                            <td class="text-center">ไม่มี</td>
                            <td class="text-center">ไม่มี</td>
                            <td class="text-center">ไม่มี</td>
                            <td class="text-center">-</td>
                            <td class="text-center">-</td>
                            <td class="text-center">&nbsp;</td>
                        </tr>
                    @endforeach
                    <tr class="font-semibold">
                        <td class="text-center">รวม</td>
                        <td class="text-center">ไม่มี</td>
                        <td class="text-center">ไม่มี</td>
                        <td class="text-center">ไม่มี</td>
                        <td class="text-center">-</td>
                        <td class="text-center">-</td>
                        <td class="text-center">&nbsp;</td>
                    </tr>
                </tbody>
            </table>

            <div>
                <b class="underline">หมายเหตุ</b>
                <p>“ทุจริตต่อหน้าที่” หมายความว่า ปฏิบัติหรือละเว้นการปฏิบัติอย่างใดในตำแหน่งหรือหน้าที่ หรือปฏิบัติหรือละเว้นการปฏิบัติอย่างใดในพฤติการณ์ที่อาจทำให้ผู้อื่นเชื่อว่ามีตำแหน่งหรือหน้าที่ ทั้งที่ตนมิได้ มีตำแหน่งหรือหน้าที่นั้น หรือใช้อำนาจในตำแหน่งหรือหน้าที่ ทั้งเพื่อแสวงหาผลประโยชน์ที่มิควรได้โดยชอบ สำหรับตนเองหรือผู้อื่น หรือกระทำการอันเป็นความผิดต่อตำแหน่งหน้าที่ราชการ หรือความผิดต่อตำแหน่ง หน้าที่ในการยุติธรรมตามประมวลกฎหมายอาญาหรือตามกฎหมายอื่น</p>
                <p>“ประพฤติมิชอบ” หมายความว่า การใช้อำนาจในตำแหน่งหรือหน้าที่อันเป็นการฝ่าฝืน กฎหมาย ระเบียบ คำสั่ง หรือมติคณะรัฐมนตรีที่มุ่งหมายจะควบคุมดูแลการรับ การเก็บรักษา หรือการใช้เงิน หรือทรัพย์สินของแผ่นดินซึ่งมิใช่การทุจริตต่อหน้าที่</p>
            </div>
        </div>
    </div>
</section>
@endsection