<div class="flex flex-row justify-between items-center">
    <div>
        <div class="flex justify-start items-start">
            <span class="text-xl text-red-500 mr-2"><i class="far fa-file-pdf"></i></span>
            <h3 class="text-lg m-0"> {{ $post->title }}</h3>
        </div>
        <div class="text-muted text-xs font-thin flex items-center gap-4 mb-2 pl-6">
            <span><i class="fas fa-user-alt"></i> {{ $post->author->name }}</span>
            <span><i class="fas fa-calendar-alt"></i> {{timeSince("d M Y H:i", strtotime($post->publish_up), "th")}}</span>
            <span><i class="fas fa-eye"></i> {{ $post->hits }}</span>
            <span><i class="fas fa-download"></i> {{ $post->downloads }}</span>
        </div>
    </div>
    <button type="button" class="btn btn-success" onclick="showModal(event, {{ $post->id }})">
        <i class="fas fa-download"></i> ดาวน์โหลด
    </button>
</div>

<!-- Download Modal -->
<div class="modal fade" id="modal-{{ $post->id }}" tabindex="-1" aria-labelledby="downloadModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="downloadModalLabel">ดาวน์โหลด</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="h-[240px] w-full flex flex-col justify-center items-center p-4">
                <h3 class="text-lg text-center mb-5">
                    <i class="fas fa-edit"></i>
                    เพื่อการปรับปรุงการให้บริการให้ดียิ่งขึ้น<br />กรุณาประเมินความพึงพอใจการต่อผลิตภัณฑ์<br />สุขภาพจิตของเราก่อน
                </h3>
                <div class="flex flex-row gap-2">
                    <a
                        href="{{ $post->satsurvey_url }}"
                        target="_blank"
                        class="btn btn-primary"
                    >
                        <i class="fas fa-tasks"></i> ประเมินความพึงพอใจ
                    </a>
                    <a
                        href="{{ $post->urls }}"
                        target="_blank"
                        class="btn btn-success"
                        id="download"
                        onclick="handleDownload(event, {{ $post->id }})"
                    >
                        <i class="fas fa-download"></i> ดาวน์โหลด
                    </a>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <!-- footer conent -->
        </div>
        </div>
    </div>
</div>