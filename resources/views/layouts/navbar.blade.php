<nav class="topnav">
    <div class="container">
        <div class="wrapper" style="width: 100%">
            <div class="menu-container" style="width: 100%">
                <div class="container">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <a href="{{ url('/') }}" class="nav-logo">
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
                                <a href="{{ url('/') }}" data-label="หน้าหลัก">
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
                                                <a href="{{ url('/vision') }}" target="_self">วิสัยทัศน์/พันธกิจ/ค่านิยม/ตัวชี้วัด</a>
                                            </div>
                                            <div class="submenu">
                                                <a href="{{ url('/executive') }}" target="_self">ผู้บริหารหน่วยงาน</a>
                                            </div>
                                            <div class="submenu">
                                                <a href="{{ url('/structure') }}" target="_self">โครงสร้างองค์กร</a>
                                            </div>
                                            <div class="submenu">
                                                <a href="{{ url('/authority') }}" target="_self">อำนาจหน้าที่</a>
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
                                                <a href="{{ url('/strategic-plans') }}" target="_self">แผนยุทธศาสตร์</a>
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
                                                <a href="{{ url('/posts/292') }}" target="_self">แผนดำเนินงานและการใช้จ่ายงบประมาณประจำปี</a>
                                            </div>
                                            <div class="submenu">
                                                <a href="{{ url('/posts/238') }}" target="_self">รายงานผลการดำเนินงานประจำปี</a>
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
                                                <a href="{{ url('/info-center') }}" target="_self">ศูนย์ข้อมูลข่าวสาร</a>
                                            </div>
                                            <div class="submenu ">
                                                <a href="{{ url('/appeal') }}" target="_self">ศูนย์ราชการใสสะอาด</a>
                                            </div>
                                            <div class="submenu ">
                                                <a href="{{ url('/moral-org') }}" target="_self">องค์กรคุณธรรมต้นแบบ</a>
                                            </div>
                                            <!-- <div class="submenu ">
                                                <a href="https://secret.dmh.go.th/main" target="_blank">แจ้งเรื่องร้องเรียน</a>
                                            </div> -->
                                            <div class="submenu has-children">
                                                <a href="#" target="_self">แจ้งเรื่องร้องเรียน</a>
                                                <div class="child-container">
                                                    <div class="childs">
                                                        <div class="child">
                                                            <a href="https://mhc9dmh.com/oldweb/Comment.aspx" target="_blank">แจ้งเรื่องร้องเรียน MHC9</a>
                                                        </div>
                                                        <div class="child">
                                                            <a href="https://secret.dmh.go.th/main/" target="_blank">แจ้งเรื่องร้องเรียน กรมสุขภาพจิต</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="submenu ">
                                                <a href="https://mhc9dmh.com/oldweb/Query.aspx" target="_blank">กระดานถาม-ตอบ</a>
                                            </div> -->
                                            <div class="submenu ">
                                                <a href="{{ url('/faq') }}" target="_self">คำถามที่ถามบ่อย (FAQ)</a>
                                            </div>
                                            <div class="submenu has-children">
                                                <a href="#" target="_self">คลังความรู้</a>
                                                <div class="child-container">
                                                    <div class="childs">
                                                        <div class="child">
                                                            <a href="{{ url('/knowledges') }}" target="_self">คลังความรู้ MHC9</a>
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
                                                            <a href="{{ url('/articles') }}" target="_self">บทความสุขภาพจิต</a>
                                                        </div>
                                                        <div class="child">
                                                            <a href="{{ url('/videos') }}" target="_self">วีดิโอสุขภาพจิต</a>
                                                        </div>
                                                        <div class="child">
                                                            <a href="{{ url('/infographics') }}" target="_self">อินโฟกราฟฟิก</a>
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
                                                <a href="{{ url('/posts') }}" target="_self">ข่าวกิจกรรม</a>
                                            </div>
                                            <div class="submenu ">
                                                <a href="{{ url('/newses/category/3') }}" target="_self">ข่าวจัดซื้อจัดจ้าง</a>
                                            </div>
                                            <!-- <div class="submenu has-children">
                                                <a href="{{ url('/newses/category/3') }}" target="_self">ข่าวจัดซื้อจัดจ้าง</a>
                                                <div class="child-container">
                                                    <div class="childs">
                                                        <div class="child">
                                                            <a href="newses/category/3" target="_self">แผนการจัดซื้อจัดจ้าง</a>
                                                        </div>
                                                        <div class="child">
                                                            <a href="newses/category/361" target="_self">สรุปผลการจัดซื้อจัดจ้าง</a>
                                                        </div>
                                                        <div class="child">
                                                            <a href="newses/category/3" target="_self">ประกาศราคากลาง</a>
                                                        </div>
                                                        <div class="child">
                                                            <a href="newses/category/3" target="_self">ประกาศร่าง TOR</a>
                                                        </div>
                                                        <div class="child">
                                                            <a href="newses/category/3" target="_self">ประกาศจัดซื้อจัดจ้าง</a>
                                                        </div>
                                                        <div class="child">
                                                            <a href="newses/category/3" target="_self">ประกาศผู้ชนะการเสนอราคา</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="submenu ">
                                                <a href="{{ url('/newses/category/4') }}" target="_self">ข่าวรับสมัครงาน</a>
                                            </div>
                                            <div class="submenu ">
                                                <a href="{{ url('/newses/category/5') }}" target="_self">ข่าวประกาศ</a>
                                            </div>
                                            <div class="submenu ">
                                                <a href="{{ url('/onepages') }}" target="_self">MHC9 News</a>
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
                                <a href="#" class="global-search-toggle" data-label="ค้นหา">
                                    <div><i class="fas fa-search"></i></div>
                                </a>
                            </div>

                            <div class="menu icon-menu">
                                <a href="#" class="global-search-toggle" data-label="ไซต์แม็พ">
                                    <div><i class="fas fa-sitemap"></i></div>
                                </a>
                            </div>
                        </div>

                        <!-- Mobile Menus -->
                        <div class="mobile-menu">
                            <div class="sidenav-btn">
                                <div class="hamburger">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>