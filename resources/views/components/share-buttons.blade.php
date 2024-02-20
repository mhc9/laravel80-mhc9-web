<div class="flex flex-row items-center gap-2">
    <h5 class="text-sm mb-0">แชร์</h5>
    <div class="flex flex-row gap-3 text-xl">
        <a
            class="facebook text-primary"
            href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.mhc9dmh.com%2Fnewweb%2Fpublic%2Fposts%2F{{$id}}"
            onclick="popupWindow($(this).attr('href'), 'facebook-share', 500, 300)"
            target="_blank"
        >
            <i class="fab fa-facebook"></i>
        </a>
        <a
            class="twitter text-info"
            href="http://twitter.com/share?text={{$title}}&url=https%3A%2F%2Fwww.mhc9dmh.com%2Fnewweb%2Fpublic%2Fposts%2F{{$id}}&via=sanyath007"
            onclick="popupWindow($(this).attr('href'), 'twitter-share', 500, 300)"
            target="_blank"
        >
            <i class="fab fa-twitter"></i>
        </a>
        <a
            class="line text-success"
            href="https://social-plugins.line.me/lineit/share?url=https%3A%2F%2Fwww.mhc9dmh.com%2Fnewweb%2Fpublic%2Fposts%2F{{$id}}"
            onclick="popupWindow($(this).attr('href'), 'line-share', 500, 300)"
            target="_blank"
        >
            <i class="fab fa-line"></i>
        </a>
    </div>
</div>
<script>
    function popupWindow(url, title, w, h) {
        var y = window.outerHeight / 2 + window.screenY - (h / 2)
        var x = window.outerWidth / 2 + window.screenX - (w / 2)
        return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + w + ', height=' + h + ', top=' + y + ', left=' + x);
    }
</script>