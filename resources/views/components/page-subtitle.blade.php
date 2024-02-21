<div class="flex gap-2 text-muted">
    <span class="text-gray-400 font-thin" style="{{ empty($textSize) ? FONT_SIZES['sm'] : FONT_SIZES[$textSize] }}">
        <i class="fas fa-user-alt"></i> {{$author->name}}
    </span>
    <span class="text-gray-400 font-thin" style="{{ empty($textSize) ? FONT_SIZES['sm'] : FONT_SIZES[$textSize] }}">
        <i class="fas fa-calendar-alt"></i> {{timeSince("d M Y H:i", strtotime($publishUp), "th")}}
    </span>
</div>