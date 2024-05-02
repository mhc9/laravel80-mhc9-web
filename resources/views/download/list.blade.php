@extends('layouts.default')

@section('content')
<section class="content-container container">
    <h1 class="title">ดาวน์โหลดเอกสาร</h1>

    <hr class="my-2" />

    <div class="content-wrapper">
        <div class="min-h-screen p-4">
            <!-- ================== Filtering Inputs ================== -->
            <div class="border rounded-md mb-2 p-2">
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
            <!-- ================== Filtering Inputs ================== -->
    
            <div class="flex flex-col gap-2 pt-2 pb-4">
                <div class="my-2">
                    <h4>หมวดคู่มือการให้บริการ/ปฏิบัติงาน</h4>

                    @foreach($posts as $post)
                        @if($post->group_id == 91)
                            <div class="border rounded-md px-4 p-2">
            
                                @include('components.download-item', ['post' => $post])
            
                            </div>
                        @endif
                    @endforeach
                </div>
    
                <!-- <div class="my-2">
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
                </div> -->
    
                <div class="my-2">
                    <h4>หมวดอื่นๆ</h4>

                    @foreach($posts as $post)
                        @if($post->group_id == 99)
                            <div class="border rounded-md px-4 p-2">
            
                                @include('components.download-item', ['post' => $post])
            
                            </div>
                        @endif
                    @endforeach
                </div>
    
            </div>
        </div>
    </div>
</section>

<script>
    let modal;
    function showModal(event, id) {
        modal = new bootstrap.Modal(document.getElementById(`modal-${id}`), {
            // options ...
        });

        modal.show();
    }

    async function handleDownload(event, id) {
        event.preventDefault();

        //TODO: To update downloaded field of web_posts table
        const res = await axios.post(`${API_URL}/posts/${id}/download`);
        console.log(res);

        window.open(event.target.href);
        modal.toggle();
    }
</script>
@endsection