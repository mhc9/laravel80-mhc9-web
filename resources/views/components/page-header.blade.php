<div class="flex flex-row items-center justify-between mb-2 px-4">
    <!-- Author info -->
    <div class="flex flex-row items-center gap-3">
        @include('components.avatar', [
            'size'      => "40px",
            'imageUrl'  => "https://www.mhc9dmh.com/data/photo/2258Img.jpg"
        ])
        <div class="flex flex-col justify-center items-start gap-1 text-muted text-xs max-md:hidden">
            <span class="font-bold"><i class="fas fa-user-alt"></i> {{$author}}</span>
            <span class="font-thin"><i class="fas fa-calendar-alt"></i> {{facebookTimeAgo($publishUp)}}</span>
        </div>
    </div>

    <!-- Share buttons -->
    @include('components.share-buttons', ['id' => $post->id, 'title' => $post->title])
</div>