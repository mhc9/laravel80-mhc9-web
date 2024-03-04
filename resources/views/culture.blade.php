@extends('layouts.default')

@section('content')
<section class="content-container container">
    <h1 class="title">
        กิจกรรมส่งเสริมวัฒนธรรมองค์กร
    </h1>

    <hr class="my-2" />

    <div class="content-wrapper">
        <div class="min-h-screen p-4">
            <div class="row">
                <div class="col-4 mb-4">
                    <div class="card">
                        <div class="card-img-top overflow-hidden max-h-[200px]">
                            <img src="{{ url('/uploads/2023/11/11092023061910654c79de9d657.JPG') }}" alt="culture-cover" />
                        </div>
                        <div class="card-body min-h-[260px]">
                            <a href="{{ url('/posts/2') }}">
                                <h3 class="card-title">วันนวมินทรมหาราช” วันที่ 13 ตุลาคม พ.ศ.2566</h3>
                            </a>
                            <p class="card-text">
                                ศูนย์สุขภาจิตที่ 9 ร่วมน้อมสำนึกพระมหากรุณาธิคุณในพระบาทสมเด็จพระบรมชนกาธิเบศร มหาภูมิพลอดุลยเดชมหาราชบรมนาถบพิตรที่ทรงมีต่อปวงชนชาวไทย
                            </p>
                        </div>
                    </div>
                </div>
    
                <div class="col-4 mb-4">
                    <div class="card">
                        <div class="card-img-top overflow-hidden max-h-[200px]">
                            <img src="{{ url('/uploads/2023/11/11092023063058654c7ca28bcfc.JPG') }}" alt="culture-cover" />
                        </div>
                        <div class="card-body min-h-[260px]">
                            <a href="{{ url('/posts/3') }}">
                                <h3 class="card-title">วันปิยะมหาราช”วันที่ 23 ตุลาคม พ.ศ.2566</h3>
                            </a>
                            <p class="card-text">
                                ศูนย์สุขภาจิตที่ 9 ร่วมถวายราชสักการะน้อมรำลึกในพระมหากรุณาธิคุณของพระบาทสมเด็จพระจุลจอมเกล้าเจ้าอยู่หัว
                            </p>
                        </div>
                    </div>
                </div>
    
                <div class="col-4 mb-4">
                    <div class="card">
                        <div class="card-img-top overflow-hidden max-h-[200px]">
                            <img src="{{ url('/uploads/2024/03/0304202406375465e56c427ee39.jpg') }}" alt="culture-cover" />
                        </div>
                        <div class="card-body min-h-[260px]">
                            <a href="{{ url('/posts/104') }}">
                                <h3 class="card-title">กิจกรรม "รักที่จะมอบ ชอบที่จะให้" วันที่ 27 พฤศจิกายน 2566</h3>
                            </a>
                            <p class="card-text">
                                ศูนย์สุขภาพจิตที่ 9 ดำเนินกิจกรรม "รักที่จะมอบ ชอบที่จะให้" จัดโรงทาน ในงานทอดกฐินสามัคคี ณ วัดหนองเป็ดน้ำ ตำบลโคกกรวด อำเมือง จังหวัดนครราชสีมา เมื่อวันที่ 27 พฤศจิกายน 2566
                            </p>
                        </div>
                    </div>
                </div>
    
                <div class="col-4 mb-4">
                    <div class="card">
                        <div class="card-img-top overflow-hidden max-h-[200px]">
                            <img src="{{ url('/uploads/2024/03/0304202406422365e56d4f5c790.jpg') }}" alt="culture-cover" />
                        </div>
                        <div class="card-body min-h-[260px]">
                            <a href="{{ url('/posts/105') }}">
                                <h3 class="card-title">วันชาติและวันพ่อแห่งชาติ วันที่ 5 ธันวาคม 2566</h3>
                            </a>
                            <p class="card-text">
                                ศูนย์สุขภาพจิตที่ 9 ร่วมพิธีวางพานพุ่มถวายราชสักการะน้อมรำลึกในพระมหากรุณาธิคุณอันล้นพ้นจนหาที่สุดมิได้ เนื่องในวันที่ 5 ธันวาคม 2566 วันคล้ายวันพระบรมราชสมภพพระบาทสมเด็จพระบรมชนกาธิเบศร มหาภูมิพลอดุลยเดชมหาราช บรมนาถบพิตร "วันชาติและวันพ่อแห่งชาติ"
                            </p>
                        </div>
                    </div>
                </div>
    
                <div class="col-4 mb-4">
                    <div class="card">
                        <div class="card-img-top overflow-hidden max-h-[200px]">
                            <img src="{{ url('/uploads/2024/01/0123202407434465af6e30eea5e.jpg') }}" alt="culture-cover" />
                        </div>
                        <div class="card-body min-h-[260px]">
                            <a href="{{ url('/posts/42') }}">
                                <h3 class="card-title">ประกาศเจตนารมณ์ต่อต้านการทุจริต วันที่ 7 ธันวาคม 2566</h3>
                            </a>
                            <p class="card-text">
                                ศูนย์สุขภาพจิตที่ 9 จัดพิธีประกาศเจตนารมณ์ต่อต้านการทุจริต ในวันที่ 7 ธันวาคม 2566 โดยมี นายนิตย์ ทองเพชรศรี ผู้อำนวยการศูนย์สุขภาพจิตที่ 9 เป็นประธานพร้อมด้วยเจ้าหน้าที่ ภายใต้แนวคิด “กระทรวงสาธารณสุข ใสสะอาดร่วมต้านทุจริต (MOPH Together Against Corruption)”
                            </p>
                        </div>
                    </div>
                </div>
    
                <div class="col-4 mb-4">
                    <div class="card">
                        <div class="card-img-top overflow-hidden h-[200px] flex justify-center items-center bg-white">
                            <img src="{{ asset('img/logo_dmh.png') }}" alt="logo-pic" class="w-[150px] h-[150px]" />
                        </div>
                        <div class="card-body min-h-[260px]">
                            <a href="{{ url('/posts/60') }}">
                                <h3 class="card-title">ประกาศเจตนารมณ์การป้องกันและแก้ไขปัญหาการล่วงละเมิดหรือคุกคามทางเพศในการทำงาน</h3>
                            </a>
                            <p class="card-text">
                                ประกาศเจตนารมณ์การป้องกันและแก้ไขปัญหาการล่วงละเมิดหรือคุกคามทางเพศในการทำงาน
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection