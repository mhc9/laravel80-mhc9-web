<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
</head>
<body>
    <div class="defaullt-layout">
        <nav class="topnav">
            <div class="container">
                <div class="wrapper" style="width: 100%">
                    <div class="menu-container" style="width: 100%">
                        <div class="container">
                            <div class="menu-wrapper">
                                <!-- Logo -->
                                <a href="/" class="nav-logo">
                                    <picture class="logo">
                                        <img
                                            src="https://upload.wikimedia.org/wikipedia/commons/f/f9/%E0%B8%95%E0%B8%A3%E0%B8%B2%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%97%E0%B8%A3%E0%B8%A7%E0%B8%87%E0%B8%AA%E0%B8%B2%E0%B8%98%E0%B8%B2%E0%B8%A3%E0%B8%93%E0%B8%AA%E0%B8%B8%E0%B8%82%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88.png"
                                            alt="logo"
                                        />
                                    </picture>
                                    <div class="logo-text">
                                        <h2>ศูนย์สุขภาพจิตที่ 9</h2>
                                        <p>Mental Health Center 9</p>
                                    </div>
                                </a>

                                <!-- Menus -->
                                <div class="bottom-menu" id="topnav-menu-container">
                                    <div class="menu icon-menu active">
                                        <a href="/" data-label="หน้าหลัก">
                                            <div><i class="fas fa-home"></i></div>
                                        </a>
                                    </div>

                                    <div class="menu has-children">
                                        <a href="#" target="_self"><div>รู้จักเรา</div></a>
                                        <div class="submenu-container ">
                                            <div class="wrapper">
                                                <!-- <MenuHero title="รู้จักเรา" imgSrc="/01.png" /> -->

                                                <div class="submenus">
                                                    <div class="submenu">
                                                        <a href="{{ url('/about') }}" target="_self">ประวัติความเป็นมา</a>
                                                    </div>
                                                    <div class="submenu">
                                                        <a href="{{ url('/vision') }}" target="_self">วิสัยทัศน์ พันธกิจ ค่านิยม</a>
                                                    </div>
                                                    <div class="submenu">
                                                        <a href="{{ url('/executive') }}" target="_self">ผู้บริหารหน่วยงาน</a>
                                                    </div>
                                                    <div class="submenu">
                                                        <a href="{{ url('/structure') }}" target="_self">โครงสร้างองค์กร</a>
                                                    </div>
                                                    <div class="submenu">
                                                        <a href="{{ url('/authority') }}" target="_self">หน้าที่และอำนาจ</a>
                                                    </div>
                                                    <div class="submenu ">
                                                        <a href="{{ url('/procedures') }}" target="_self">มาตรฐานการปฏิบัติงาน</a>
                                                    </div>
                                                    <div class="submenu">
                                                        <a href="{{ url('/manuals') }}" target="_self">มาตรฐานการให้บริการ</a>
                                                    </div>
                                                </div>
                                                <div class="submenus">
                                                    <div class="submenu">
                                                        <a href="{{ url('/policies') }}" target="_self">นโยบายองค์กร</a>
                                                    </div>
                                                    <div class="submenu">
                                                        <a href="{{ url('/laws') }}" target="_self">กฎ ระเบียบ ข้อบังคับ</a>
                                                    </div>
                                                    <div class="submenu">
                                                        <a href="{{ url('/posts/75') }}" target="_self">แผนยุทธศาสตร์</a>
                                                    </div>
                                                    <!-- <div class="submenu has-children">
                                                        <a href="#" target="_self">แผนยุทธศาสตร์</a>
                                                        <div class="child-container">
                                                            <div class="childs">
                                                                <div class="child">
                                                                    <a href="#" target="_blank" rel="noreferrer">แผนยุทธศาสตร์</a>
                                                                </div>
                                                                <div class="child">
                                                                    <a href="#" target="_blank" rel="noreferrer">แผนปฏิบัติราชการ</a>
                                                                </div>
                                                                <div class="child">
                                                                    <a href="#" target="_blank" rel="noreferrer">แผนปฏิบัติการ</a>
                                                                </div>
                                                                <div class="child">
                                                                    <a href="#" target="_blank" rel="noreferrer">แผนระดับ 3 ในความรับผิดชอบ</a>
                                                                </div>
                                                                <div class="child">
                                                                    <a href="#" target="_self">แผนยุทธศาสตร์บูรณาการ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="submenu has-children">
                                                        <a href="#" target="_self">คำรับรองและรายงานผลการปฏิบัติราชการ</a>
                                                        <div class="child-container">
                                                            <div class="childs">
                                                                <div class="child">
                                                                    <a href="#" target="_self">ปีงบประมาณ พ.ศ. 2566</a>
                                                                </div>
                                                                <div class="child">
                                                                    <a href="#" target="_self">ปีงบประมาณ พ.ศ. 2565</a>
                                                                </div>
                                                                <div class="child">
                                                                    <a href="#" target="_self">ปีงบประมาณ พ.ศ. 2564</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> */}
                                                    <div class="submenu">
                                                        <a href="#" target="_self">การกำกับติดตามการดำเนินงาน</a>
                                                    </div> -->
                                                    <div class="submenu">
                                                        <a href="{{ url('/annual-reports') }}" target="_self">รายงานประจำปี</a>
                                                    </div>
                                                    <div class="submenu">
                                                        <a href="{{ url('/posts/90') }}" target="_self">แผนดำเนินงานและการใช้จ่ายงบประมาณประจำปี</a>
                                                    </div>
                                                    <div class="submenu">
                                                        <a href="{{ url('/posts/91') }}" target="_self">รายงานผลการดำเนินงานประจำปี</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="menu has-children">
                                        <a href="#" target="_self"><div>บริการ</div></a>
                                        <div class="submenu-container ">
                                            <div class="wrapper">
                                                <!-- <MenuHero title="บริการประชาชน" imgSrc="/02.png" /> -->

                                                <div class="submenus">
                                                    <div class="submenu ">
                                                        <a to="#" target="_self">ศูนย์ข้อมูลข่าวสาร</a>
                                                    </div>
                                                    <div class="submenu ">
                                                        <a href="{{ url('/appeal') }}" target="_self">ศูนย์ราชการใสสะอาด</a>
                                                    </div>
                                                    <!-- <div class="submenu ">
                                                        <a href="https://secret.dmh.go.th/main" target="_blank">แจ้งเรื่องร้องเรียน</a>
                                                    </div> -->
                                                    <div class="submenu has-children">
                                                        <a href="#" target="_self">แจ้งเรื่องร้องเรียน</a>
                                                        <div class="child-container">
                                                            <div class="childs">
                                                                <div class="child">
                                                                    <a href="https://mhc9dmh.com/Comment.aspx" target="_blank">แจ้งเรื่องร้องเรียน MHC9</a>
                                                                </div>
                                                                <div class="child">
                                                                    <a href="https://secret.dmh.go.th/main/" target="_blank">แจ้งเรื่องร้องเรียน กรมสุขภาพจิต</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="submenu ">
                                                        <a href="https://mhc9dmh.com/Query.aspx" target="_blank">กระดานถาม-ตอบ</a>
                                                    </div> -->
                                                    <div class="submenu ">
                                                        <a href="{{ url('/faq') }}" target="_self">คำถามที่ถามบ่อย (FAQ)</a>
                                                    </div>
                                                    <div class="submenu has-children">
                                                        <a href="#" target="_self">คลังความรู้</a>
                                                        <div class="child-container">
                                                            <div class="childs">
                                                                <div class="child">
                                                                    <a href="https://mhc9dmh.com/show.aspx?x=KM" target="_blank">คลังความรู้ MHC9</a>
                                                                </div>
                                                                <div class="child">
                                                                    <a href="https://www.dmh-elibrary.org/" target="_blank">คลังความรู้ กรมสุขภาพจิต</a>
                                                                </div>
                                                                <div class="child">
                                                                    <a href="https://www.thaidmh-elibrary.org/" target="_blank">ห้องสมุด กรมสุขภาพจิต (DMH e-Library)</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="submenu has-children">
                                                        <a href="#" target="_self">สื่อสุขภาพจิต</a>
                                                        <div class="child-container">
                                                            <div class="childs">
                                                                <div class="child">
                                                                    <a href="{{ url('/articles/list') }}" target="_self">บทความสุขภาพจิต</a>
                                                                </div>
                                                                <div class="child">
                                                                    <a href="{{ url('/videos/list') }}" target="_self">วีดิโอสุขภาพจิต</a>
                                                                </div>
                                                                <div class="child">
                                                                    <a href="#" target="_self">อินโฟกราฟฟิก</a>
                                                                </div>
                                                                <!-- <div class="child">
                                                                    <a href="#" target="_self">อนามัยบุ๊ค</a>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="submenus">
                                                    <div class="submenu ">
                                                        <a href="{{ url('/e-services') }}" target="_self">ระบบสารสนเทศ (E-Service)</a>
                                                    </div>
                                                    <div class="submenu ">
                                                        <a href="{{ url('/downloads') }}" target="_self">ดาวน์โหลดเอกสาร</a>
                                                    </div>
                                                    <!-- <div class="submenu">
                                                        <a href="#" target="_self">บริการอื่นๆ</a>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="menu has-children">
                                        <a href="#" target="_self"><div>ข่าวประชาสัมพันธ์</div></a>
                                        <div class="submenu-container ">
                                            <div class="wrapper">
                                                <!-- <MenuHero title="ข่าวประชาสัมพันธ์" imgSrc="/03.png" /> -->

                                                <div class="submenus">
                                                    <div class="submenu ">
                                                        <a href="{{ url('/posts/list') }}" target="_self">ข่าวกิจกรรม</a>
                                                    </div>
                                                    <!-- <div class="submenu ">
                                                        <a href="#" target="_self">
                                                            ข่าวประชาสัมพันธ์ส่วนกลาง
                                                        </a>
                                                    </div> -->
                                                    <div class="submenu has-children">
                                                        <a href="{{ url('/news/3/list') }}" target="_self">ข่าวจัดซื้อจัดจ้าง</a>
                                                        <div class="child-container">
                                                            <div class="childs">
                                                                <div class="child">
                                                                    <a href="news/1/list" target="_self">แผนการจัดซื้อจัดจ้าง</a>
                                                                </div>
                                                                <div class="child">
                                                                    <a href="news/1/list" target="_self">ประกาศราคากลาง</a>
                                                                </div>
                                                                <div class="child">
                                                                    <a href="news/1/list" target="_self">ประกาศร่าง TOR</a>
                                                                </div>
                                                                <div class="child">
                                                                    <a href="news/1/list" target="_self">ประกาศจัดซื้อจัดจ้าง</a>
                                                                </div>
                                                                <div class="child">
                                                                    <a href="news/1/list" target="_self">ประกาศผู้ชนะการเสนอราคา</a>
                                                                </div>
                                                                <!-- <div class="child">
                                                                    <a href="news/1/list" target="_self">สรุปผลการจัดซื้อจัดจ้าง</a>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="submenu ">
                                                        <a href="{{ url('/news/4/list') }}" target="_self">ข่าวรับสมัครงาน</a>
                                                    </div>
                                                    <div class="submenu ">
                                                        <a href="{{ url('/news/5/list') }}" target="_self">ข่าวประกาศ</a>
                                                    </div>
                                                    <div class="submenu ">
                                                        <a href="{{ url('/onepages/list') }}" target="_self">MHC9 News</a>
                                                    </div>
                                                    <div class="submenu ">
                                                        <a href="{{ url('/calendar') }}" target="_self">ปฏิทินกิจกรรม</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="menu has-children">
                                        <a href="#" target="_self"><div>ติดต่อเรา</div></a>
                                        <div class="submenu-container expand-left">
                                            <div class="wrapper">                        
                                                <!-- <MenuHero title="ติดต่อเรา" imgSrc="/05.png" /> -->

                                                <div class="submenus">
                                                    <div class="submenu ">
                                                        <a href="{{ url('/contact') }}" target="_self">ติดต่อเรา</a>
                                                    </div>
                                                    <div class="submenu ">
                                                        <a href="{{ url('/links') }}" target="_self">ลิงค์ที่เกี่ยวข้อง</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="menu icon-menu">
                                        <a href="#" class="global-search-toggle">
                                            <div><i class="fas fa-search"></i></div>
                                        </a>
                                    </div>

                                    <div class="menu icon-menu">
                                        <a href="#" class="global-search-toggle">
                                            <div><i class="fas fa-sitemap"></i></div>
                                        </a>
                                    </div>
                                </div>

                                <!-- Mobile Menus -->
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

        <footer>
            <div class="footer-top container">
                <div>
                    <!-- Row -->
                    <div class="footer-row">
                        <!-- Col -->
                        <div class="footer-col footer-menu">
                            <h2>รู้จักเรา</h2>
                            <ul>
                                <li><a href="/about">ประวัติความเป็นมา</a></li>
                                <li><a href="/vision">วิสัยทัศน์/พันธกิจ/ค่านิยม</a></li>
                                <li><a href="/executives">ผู้บริหารหน่วยงาน</a></li>
                                <li><a href="/structure">โครงสร้างองค์กร</a></li>
                                <li><a href="/authority">หน้าที่และอำนาจ</a></li>
                                <li><a href="/procedures">มาตรฐานการปฏิบัติงาน</a></li>
                                <li><a href="/manuals">มาตรฐานการให้บริการ</a></li>
                                <li><a href="/laws">กฎ ระเบียบ ข้อบังคับ</a></li>
                                <li><a href="/policies">นโยบายองค์กร</a></li>
                                <li><a href="/annual-reports">รายงานประจำปี</a></li>
                            </ul>
                        </div>

                        <!-- Col -->
                        <div class="footer-col footer-menu">
                            <h2>บริการ</h2>
                            <ul>
                                <li><a href="/">ศูนย์ข้อมูลข่าวสาร</a></li>
                                <li><a href="/appeal">ศูนย์ราชการใสสะอาด</a></li>
                                <li><a href="https://secret.dmh.go.th/main" target="_blank">แจ้งเรื่องร้องเรียน</a></li>
                                <li><a href="https://mhc9dmh.com/Query.aspx" target="_blank">กระดานถาม-ตอบ</a></li>
                                <!-- <li><a href="/faq">คำถามที่ถามบ่อย (FAQ)</a></li> -->
                                <li><a href="/e-services">ระบบสารสนเทศ (E-Service)</a></li>
                                <li><a href="/downloads">ดาวน์โหลดเอกสาร</a></li>
                            </ul>
                        </div>

                        <!-- Col -->
                        <div class="footer-col footer-menu">
                            <h2>สำหรับเจ้าหน้าที่</h2>
                            <ul>
                                <!-- {services.map(service => (
                                    <li key={service.id}>
                                        <a href={service.link} target='_blank'>{service.name}</a>
                                    </li>
                                ))} -->
                            </ul>
                        </div>

                        <!-- Col -->
                        <div class="footer-col footer-menu">
                            <h2>ติอต่อเรา</h2>
                            <ul class="footer-address">
                                <li>ศูนย์สุขภาพจิตที่ 9</li>
                                <li>เลขที่ 86 ถ.ช้างเผือก ต.ในเมือง อ.เมือง จ.นครราชสีมา 30000</li>
                                <li>โทรศัพท์ 0-4425-6729</li>
                                <li>โทรสาร 0-4425-6730</li>
                                <li>อีเมล mhc9dmh@gmail.com</li>
                            </ul>

                            @include('components.social-icons')
                        </div>
                    </div>
                    <!-- Row -->

                    <div class="footer-row">
                        <div class="footer-col footer-policy">
                            <div class="standard-wrapper">
                                <div class="standard-logo">
                                    <img src="https://anamai.moph.go.th/assets/app/images/icon/ipv6.png" alt="standard-logo" />
                                </div>
                                <div class="standard-logo">
                                    <img src="https://anamai.moph.go.th/assets/app/images/icon/w3c.png" alt="standard-logo" />
                                </div>
                            </div>
                            <div class="policy-wrapper">
                                <a href="/website-policy">นโยบายเว็บไซต์</a> |
                                <abs href="/">นโยบายการคุ้มครองข้อมูลส่วนบุคคล</abs> |
                                <a href="/">นโยบายการรักษาความมั่นคงปลอดภัยเว็บไซต์</a>
                            </div>
                        </div>
                        <div class="footer-col footer-stat">
                            <!-- <i class="fas fa-users"></i> -->
                        </div>
                    </div>
                    <!-- Row -->
                </div>
            </div>
            <div class="footer-bottom">
                <div>
                    ©2020 ศูนย์สุขภาพจิตที่ 9 All Rights Reserved | DESIGNED BY 
                    <a href="https://www.query-studio.com" target="_blank" rel="noreferrer">
                        นายสัญญา ธรรมวงษ์
                    </a>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
