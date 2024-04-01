<div class="flex flex-row items-center justify-between gap-4 px-4 pt-2 pb-4">
    <div class="flex flex-row items-center justify-start gap-4">
        @if ($hits['show'])
            <div class="flex justify-start items-center text-xl text-gray-500 cursor-pointer hover:text-black">
                <a href="#" data-toggle="tooltip" title="ยอดเข้าชม">
                    <i class="fas fa-eye"></i><span class="ml-2 text-base">{{$hits['value']}}</span>
                </a>
            </div>
        @endif

        @if ($downloads['show'])
            <div class="flex justify-start items-center text-xl text-gray-500 cursor-pointer hover:text-black">
                <a href="#" data-toggle="tooltip" title="ยอดดาวน์โหลด">
                    <i class="fas fa-download"></i><span class="ml-2 text-base">{{$downloads['value']}}</span>
                </a>
            </div>
        @endif

        @if ($shares['show'])
            <div class="flex justify-start items-center text-xl text-gray-500 cursor-pointer hover:text-black">
                <a href="#" data-toggle="tooltip" title="ยอดแชร์">
                    <i class="fas fa-share-alt"></i><span class="ml-2 text-base">{{$shares['value']}}</span>
                </a>
            </div>
        @endif

        @if ($likes['show'])
            <div class="flex justify-start items-center text-xl text-gray-500 cursor-pointer hover:text-black">
            <a href="#" data-toggle="tooltip" title="ยอดชื่นชอบ">
                <i class="fas fa-heart"></i><span class="ml-2 text-base">{{$likes['value']}}</span>
            </a>
            </div>
        @endif
    </div>

    <!-- Comments -->
    @if ($comments['show'])
        <div class="flex justify-start items-center text-xl text-gray-500 cursor-pointer hover:text-black">
            <a href="#" data-toggle="tooltip" title="แสดงคิดเห็น">
                <i class="far fa-comments"></i><span class="ml-2 text-base">{{$comments['value']}}</span>
            </a>
        </div>
    @endif
</div>

<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
    });
</script>