@extends('layouts.default')

@section('content')
<section class="content-container container">
    <h1 class="title">
        E-Report <i class="fas fa-angle-right"></i>ข้อมูลเชิงสถิติ <i class="fas fa-angle-right"></i>ข้อมูลการให้บริการจัดโครงการ
    </h1>

    <hr class="my-2" />

    <div class="content-wrapper p-4">
        <div class="min-h-screen">
            <div class="flex flex-col justify-center items-center gap-2 mb-2">
                <h3 class="text-center">รายงานสถิติเรื่องข้อมูลการให้บริการผ่านช่องทางออนไลน์<br />ศูนย์สุขภาพจิตที่ 9 กรมสุขภาพจิต</h3>
                <h5>ประจำปีงบประมาณ 2569 (ข้อมูลตั้งแต่ 1 ตุลาคม 2568- 28 กุมภาพันธ์ 2569)</h5>
            </div>

            <table class="table table-bordered table-striped table-hover text-lg">
                <thead>
                    <tr>
                        <th class="text-center" rowspan="2">ประจำเดือน</th>
                        <th class="text-center w-[20%]" colspan="2">จำนวนผู้มารับบริการ</th>
                        <th class="text-center w-[20%]" rowspan="2">หมายเหตุ</th>
                    </tr>
                    <tr>
                        <th class="text-center w-[20%]">ตอบรับเข้าร่วมประชุม</th>
                        <th class="text-center w-[20%]">Data Catalog MHC 9</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">ตุลาคม 2567</td>
                        <td class="text-center">0</td>
                        <td class="text-center"></td>
                        <td class="text-center">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="text-center">พฤศจิกายน 2567</td>
                        <td class="text-center">64</td>
                        <td class="text-center"></td>
                        <td class="text-center">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="text-center">ธันวาคม 2567</td>
                        <td class="text-center">40</td>
                        <td class="text-center"></td>
                        <td class="text-center">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="text-center">มกราคม 2568</td>
                        <td class="text-center">160</td>
                        <td class="text-center"></td>
                        <td class="text-center">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="text-center">กุมภาพันธ์ 2568</td>
                        <td class="text-center">4</td>
                        <td class="text-center"></td>
                        <td class="text-center">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="text-center">รวม</td>
                        <td class="text-center">369</td>
                        <td class="text-center">4,962</td>
                        <td class="text-center">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection