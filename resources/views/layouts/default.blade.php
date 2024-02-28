<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- JS -->
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div class="defaullt-layout">
        @include('layouts.navbar')
        @include('layouts.sidebar')

        <main>
            @yield('content')
        </main>

        @include('layouts.footer')
    </div>

    <!--  Sidebar -->
    <script>
        const sidebar = document.querySelector('.sidebar');
        const sidebarToggler = document.querySelector('.sidenav-btn');

        // Toggling the Sidebar
        sidebarToggler.addEventListener('click', () => {
            sidebar.classList.toggle("show");
            sidebarToggler.classList.toggle("close");
        });

        // Closing the Sidebar on clicking Outside and on the Sidebar-Links
        // window.addEventListener('click', (e) => {
        //     if (e.target.id !== 'sidebar' && e.target.className !== 'sidebar_toggler') {
        //         sidebar.classList.remove("show");
                    // sidebarToggler.classList.toggle("close");
        //     }
        // });
    </script>

    <!-- Facebook SDK -->
    <!-- <div id="fb-root"></div> -->
    <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v19.0" nonce="3W0TiTA5"></script> -->
    <!-- Facebook SDK -->

    <!-- LINE Plugins -->
    <!-- <script src="https://www.line-website.com/social-plugins/js/thirdparty/loader.min.js" async="async" defer="defer"></script> -->
    <!-- LINE Plugins -->
    

    <!-- Messenger ปลั๊กอินแชท Code -->
    <!-- <div id="fb-customer-chat" class="fb-customerchat"></div>
    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "766919693659033");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script> -->

    <!-- Your SDK code -->
    <!-- <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml   : true,
                version : 'v19.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/th_TH/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script> -->

    <!-- Cookie Consent of GPPC -->
    <!-- <script src="https://gppc-app.onde.go.th/cdn/pdpa-cookieconsent.js"></script>
    <script src="https://gppc-app.onde.go.th/cdn/pdpa-cookieconsent-init.js?client=ca-pub-916473029720240213&adjust=true"></script> -->
</body>
</html>
