@extends('layouts.default')

@section('content')
<section class="content-container container">
    <h1 class="title">
        E-Report <i class="fas fa-angle-right"></i>ข้อมูลเชิงสถิติ <i class="fas fa-angle-right"></i>ข้อมูลเชิงสถิติเรื่องร้องเรียนการทุจริตประจำปี
    </h1>

    <hr class="my-2" />

    <div class="content-wrapper p-4">
        <div class="min-h-screen">
            <table class="table table-bordered table-striped table-hover text-lg">
                <thead>
                    <tr>
                        <th class="text-center">ประจำเดือน</th>
                        <th class="text-center w-[22%]">จำนวนข้อร้องเรียน</th>
                        <th class="text-center w-[22%]">จำนวนเรื่องที่อยู่ระหว่างดำเนินการ</th>
                        <th class="text-center w-[22%]">จำนวนเรื่องที่ดำเนินการแล้วเสร็จ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">ตุลาคม 2566</td>
                        <td class="text-center">0</td>
                        <td class="text-center">0</td>
                        <td class="text-center">0</td>
                    </tr>
                    <tr>
                        <td class="text-center">พฤศจิกายน 2566</td>
                        <td class="text-center">0</td>
                        <td class="text-center">0</td>
                        <td class="text-center">0</td>
                    </tr>
                    <tr>
                        <td class="text-center">ธันวาคม 2566</td>
                        <td class="text-center">0</td>
                        <td class="text-center">0</td>
                        <td class="text-center">0</td>
                    </tr>
                    <tr>
                        <td class="text-center">มกราคม 2567</td>
                        <td class="text-center">0</td>
                        <td class="text-center">0</td>
                        <td class="text-center">0</td>
                    </tr>
                    <tr>
                        <td class="text-center">กุมภาพันธ์ 2567</td>
                        <td class="text-center">0</td>
                        <td class="text-center">0</td>
                        <td class="text-center">0</td>
                    </tr>
                    <tr>
                        <td class="text-center">รวม</td>
                        <td class="text-center">0</td>
                        <td class="text-center">0</td>
                        <td class="text-center">0</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection