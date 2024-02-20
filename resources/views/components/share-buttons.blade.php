<div class="flex flex-row items-center gap-2">
    <h5 class="text-sm mb-0">แชร์</h5>
    <div class="flex flex-row gap-3 text-xl">
        <a
            class="facebook text-primary"
            href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.mhc9dmh.com%2Fnewweb%2Fpublic%2F%23%2Fposts%2F{{$id}}"
            onclick="openSocialApp(this, event, 'facebook-share')"
            target="_blank"
        >
            <i class="fab fa-facebook"></i>
        </a>
        <a
            class="twitter text-info"
            href="http://twitter.com/share?text={{$title}}&url=https%3A%2F%2Fwww.mhc9dmh.com%2Fnewweb%2Fpublic%2F%23%2Fposts%2F{{$id}}&via=sanyath007"
            onclick="openSocialApp(this, event, 'twitter-share')"
            target="_blank"
        >
            <i class="fab fa-twitter"></i>
        </a>
        <a
            class="line text-success"
            href="https://social-plugins.line.me/lineit/share?url=https%3A%2F%2Fwww.mhc9dmh.com%2Fnewweb%2Fpublic%2F%23%2Fposts%2F{{$id}}"
            onclick="openSocialApp(this, event, 'line-share')"
            target="_blank"
        >
            <i class="fab fa-line"></i>
        </a>
    </div>
</div>
<script>
    function openSocialApp(el, event, appName) {
        event.preventDefault();
        window.open($(el).attr('href'), appName, 'width=500, height=300');
        return false;
    }
</script>