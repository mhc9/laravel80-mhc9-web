@extends('layouts.default')

@section('content')
<section class="content-container container">
    <h1 class="title">
        ข้อมูลเชิงสถิติการให้บริการ <i class="fas fa-angle-right"></i>จำนวนผู้เข้าร่วมโครงการประจำปี
    </h1>

    <hr class="my-2" />

    <div class="content-wrapper p-4">
        <div class="min-h-screen">
            <table class="table table-bordered table-striped table-hover text-lg">
                <thead>
                    <tr>
                        <th class="text-center">ประจำเดือน</th>
                        <th class="text-center w-[20%]">จำนวนการจัดโครงการ (ครั้ง)</th>
                        <th class="text-center w-[20%]">จำนวนคนผู้เข้าร่วม (คน)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">ตุลาคม 2566</td>
                        <td class="text-center">0</td>
                        <td class="text-center">0</td>
                    </tr>
                    <tr>
                        <td class="text-center">พฤศจิกายน 2566</td>
                        <td class="text-center">1</td>
                        <td class="text-center">9</td>
                    </tr>
                    <tr>
                        <td class="text-center">ธันวาคม 2566</td>
                        <td class="text-center">10</td>
                        <td class="text-center">544</td>
                    </tr>
                    <tr>
                        <td class="text-center">มกราคม 2567</td>
                        <td class="text-center">15</td>
                        <td class="text-center">665</td>
                    </tr>
                    <tr>
                        <td class="text-center">กุมภาพันธ์ 2567</td>
                        <td class="text-center">5</td>
                        <td class="text-center">158</td>
                    </tr>
                    <tr>
                        <td class="text-center">รวม</td>
                        <td class="text-center">31</td>
                        <td class="text-center">1,376</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection