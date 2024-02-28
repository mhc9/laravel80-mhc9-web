@extends('layouts.default')

@section('content')
<section class="content-container container">
    <h1 class="title">
        Data Catalog
    </h1>

    <hr class="my-2" />

    <div class="content-wrapper">
        <div class="border rounded-xl overflow-hidden p-4 mb-2">
            <div class="flex justify-between">
                <h3 class="w-[80%] text-lg">จำนวนจิตแพทย์ พยาบาลจิตเวช และสหวิชาชีพ ในเขตสุขภาพที่ 9</h3>
                <a href="{{ url('/uploads/data-catalog/') }}" class="btn btn-success">
                    <span><i class="fas fa-file-csv"></i></span>
                    download
                </a>
            </div>
        </div>
        <div class="border rounded-xl overflow-hidden p-4 mb-2">
            <div class="flex justify-between">
                <h3 class="w-[80%] text-lg">รายชื่อพื้นที่ดำเนินการโครงการพัฒนาเด็กและเยาวชนในถิ่นทุรกันดาร ตามพระราชดำริฯ (กพด.) ปีงบประมาณ 2566</h3>
                <a href="{{ url('/uploads/data-catalog/DataSet_12_01.csv') }}" class="btn btn-success">
                    <span><i class="fas fa-file-csv"></i></span>
                    download
                </a>
            </div>
        </div>
        <div class="border rounded-xl overflow-hidden p-4 mb-2">
            <div class="flex justify-between">
                <h3 class="w-[80%] text-lg">สรุปผลการดำเนินงานเฝ้าระวังปัญหาสุขภาพจิตนักเรียนในระบบสุขภาพจิตโรงเรียนวิถีใหม่ (School Health HERO) ภาคเรียนที่ 1 ปีการศึกษา 2566</h3>
                <div>
                    <a href="{{ url('/uploads/data-catalog/DataSet_12_02.csv') }}" class="btn btn-success">
                        <span><i class="fas fa-file-csv"></i></span>
                        download
                    </a>
                </div>
            </div>
        </div>
        <div class="border rounded-xl overflow-hidden p-4 mb-2">
            <div class="flex justify-between">
                <h3 class="w-[80%] text-lg">รายชื่อหน่วยงานที่ได้การอบรมหลักสูตรเจ้าหน้าที่ให้คำปรึกษาสุขภาพแบบองค์รวม (Holistic Health Advisor) และโปรแกรมสร้างสุขวัยทำงานในสถานประกอบการและหน่วยงานภาครัฐ ปีงบประมาณ 2566</h3>
                <div>
                    <a href="{{ url('/uploads/data-catalog/DataSet_13_01.csv') }}" class="btn btn-success">
                        <span><i class="fas fa-file-csv"></i></span>
                        download
                    </a>
                </div>
            </div>
        </div>
        <div class="border rounded-xl overflow-hidden p-4 mb-2">
            <div class="flex justify-between">
                <h3 class="w-[80%] text-lg">รายชื่อพื้นที่ดำเนินการสร้างสุขในผู้สูงอายุ ปีงบประมาณ 2566</h3>
                <div>
                    <a href="{{ url('/uploads/data-catalog/DataSet_12_03.csv') }}" class="btn btn-success">
                        <span><i class="fas fa-file-csv"></i></span>
                        download
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection