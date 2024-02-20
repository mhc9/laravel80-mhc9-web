@extends('layouts.app')

@section('content')
<section class="downloads container">
    <h1 class="title">ดาวน์โหลดเอกสาร</h1>

    <hr class="my-2" />

    <div class="downloads-wrapper">
        <!-- Download Modal -->

        <div class="border rounded-md mt-4 mb-2 mx-4 p-2">
            <div class="flex flex-row gap-2">
                <input type="text" class="form-control" placeholder="กรอกคำค้น..." />
                <select class="form-control">
                    <option value="">ทุกหมวดหมู่</option>
                    <option value="1">คู่มือการให้บริการ/ปฏิบัติงาน</option>
                    <option value="2">สื่อความรู้สุขภาพจิต</option>
                    <option value="3">งานวิจัย/บทความวิชาการ</option>
                </select>
                <button type="button" class="btn btn-primary">
                    ค้นหา
                </button>
            </div>
        </div>

        <div class="flex flex-col gap-2 pt-2 pb-4 px-4">
            <div class="my-2">
                <h4>หมวดคู่มือการให้บริการ/ปฏิบัติงาน</h4>
                <div class="border rounded-md px-4 p-2">
                    <div class="flex flex-row justify-between items-center">
                        <div>
                            <div class="flex justify-start items-start">
                                <span class="text-xl text-red-500 mr-2"><i class="far fa-file-pdf"></i></span>
                                <h3 class="text-lg m-0">แนวทางการช่วยเหลือและปรับพฤติกรรมเด็กสมาธิสัน ภาวะซึมเศร้า การรังแกกันในโรงเรียน สําหรับครูและผู้ปกครอง</h3>
                            </div>
                            <div class="text-muted text-xs font-thin flex items-center gap-4 mb-2 pl-6">
                                <span><i class="fas fa-calendar-alt"></i> {'2024-01-22 16.30'} น.</span>
                                <span><i class="fas fa-user-alt"></i> {'Administrator'}</span>
                                <span><i class="fas fa-eye"></i> {'0'}</span>
                                <span><i class="fas fa-download"></i> {'0'}</span>
                            </div>
                        </div>
                        <button type="button" class="btn btn-light" onClick={() => setShowModalDownload(true)}>
                            <i class="fas fa-download"></i> ดาวน์โหลด
                        </button>
                    </div>
                </div>
            </div>

            <div class="my-2">
                <h4>หมวดสื่อความรู้สุขภาพจิต</h4>
                <div class="border rounded-md px-4 p-2">

                </div>
            </div>

            <div class="my-2">
                <h4>หมวดงานวิจัย/บทความวิชาการ</h4>
                <div class="border rounded-md px-4 p-2">

                </div>
            </div>

            <div class="my-2">
                <h4>หมวดการจัดการความรู้/ถอดบทเรียน</h4>
                <div class="border rounded-md px-4 p-2">

                </div>
            </div>

            <div class="my-2">
                <h4>หมวดนวัตกรรม</h4>
                <div class="border rounded-md px-4 p-2">

                </div>
            </div>

            <div class="my-2">
                <h4>หมวดอื่นๆ</h4>
                <div class="border rounded-md px-4 p-2">

                </div>
            </div>

        </div>
    </div>
</section>
@endsection