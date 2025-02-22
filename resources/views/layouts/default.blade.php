<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('favicon.ico') }}" />

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

    <a href="#">
        <div id="to-top">
            <i class="fas fa-arrow-up"></i>
        </div>
    </a>

    <!--  Sidebar -->
    <script>
        /** To top button */
        document.addEventListener('scroll', () => {
            const toTopButton = document.querySelector('#to-top');

            if (window.scrollY > 200) {
                toTopButton.classList.add('show');
            } else {
                toTopButton.classList.remove('show');
            }
        });

        /** Toggling the Sidebar */
        const sidebar = document.querySelector('.sidebar');
        const sidebarToggler = document.querySelector('.sidenav-btn');
        sidebarToggler.addEventListener('click', () => {
            sidebar.classList.toggle("show");
            sidebarToggler.classList.toggle("close");
        });

        // Closing the Sidebar on clicking Outside and on the Sidebar-Links
        // window.addEventListener('click', (e) => {
        //     if (e.target.className !== 'sidebar' && e.target.className !== 'sidenav-btn') {
        //         sidebar.classList.remove("show");
        //         sidebarToggler.classList.toggle("close");
        //     }
        // });
    </script>

    <!-- ================== LINE Plugins ================== -->
    <script src="https://www.line-website.com/social-plugins/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
    <!-- ================== LINE Plugins ================== -->

    <!-- ================== Facebook ปลั๊กอิน ================== -->
    <!-- Facebook SDK -->
    <!-- <div id="fb-root"></div> -->
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v19.0" nonce="3W0TiTA5"></script>
    
    <!-- option 1 -->
    <!-- <div id="fb-customer-chat" class="fb-customerchat"></div>
    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "766919693659033");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script> -->

    <!-- option 2 -->
    <div class="fb-customerchat" page_id="766919693659033" logged_in_greeting="สอบถามเพิ่มเติม ?" logged_out_greeting="สอบถามเพิ่มเติม"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                // appId: '<APP_ID>',
                autoLogAppEvents: true,
                xfbml   : true,
                version : 'v19.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/th_TH/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- ================== Facebook ปลั๊กอิน ================== -->

    <!-- ================== GPPC ================== -->
    <!-- Cookie Consent of GPPC -->
    <script src="https://gppc-app.onde.go.th/cdn/pdpa-cookieconsent.js"></script>
    <script src="https://gppc-app.onde.go.th/cdn/pdpa-cookieconsent-init.js?client=ca-pub-311584378020240521&adjust=true"></script>
    <!-- ================== GPPC ================== -->
</body>
</html>
