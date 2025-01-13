<div class="sidebar">
    <div class="sidebar-wrapper">
        <!-- <span class="close-btn">
            <i class="fas fa-times"></i>
        </span> -->
        <div class="navigation">
            <ul>
                <li>
                    <a href="{{ url('/') }}">หน้าหลัก</a>
                </li>
                <li class="has-sub">
                    <a href="#" target="_self"><i class="fas fa-home"></i> รู้จักเรา</a>
                    <ul>
                        <li>
                            <a href="{{ url('/about') }}">ประวัติความเป็นมา</a>
                        </li>
                        <li>
                            <a href="{{ url('/vision') }}">วิสัยทัศน์/พันธกิจ/ค่านิยม/ตัวชี้วัด</a>
                        </li>
                        <li>
                            <a href="{{ url('/executives') }}">ผู้บริหารหน่วยงาน</a>
                        </li>
                        <li>
                            <a href="{{ url('/structure') }}">โครงสร้างองค์กร</a>
                        </li>
                        <li>
                            <a href="{{ url('/authority') }}">อำนาจหน้าที่</a>
                        </li>
                        <li>
                            <a href="{{ url('/procedures') }}">มาตรฐานการปฏิบัติงาน</a>
                        </li>
                        <li>
                            <a href="{{ url('/manuals') }}">มาตรฐานการให้บริการ</a>
                        </li>
                        <li>
                            <a href="{{ url('/laws') }}">กฎ ระเบียบ ข้อบังคับ</a>
                        </li>
                        <li>
                            <a href="{{ url('/policies') }}">นโยบายองค์กร</a>
                        </li>
                        <li>
                            <a href="{{ url('/posts/75') }}">แผนยุทธศาสตร์</a>
                        </li>
                        <!-- {/* <li class="has-sub text-sm">
                            <a href="#">แผนยุทธศาสตร์</a>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">แผนยุทธศาสตร์</a>
                                </li>
                                <li>
                                    <a href="{{ url('/') }}">แผนปฏิบัติราชการ</a>
                                </li>
                                <li>
                                    <a href="{{ url('/') }}">แผนปฏิบัติการ</a>
                                </li>
                            </ul>
                        </li> */}
                        {/* <li class="has-sub text-sm">
                            <a href="#">คำรับรองและรายงานผลการปฏิบัติราชการ</a>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">ปีงบประมาณ พ.ศ. 2566</a>
                                </li>
                                <li>
                                    <a href="{{ url('/') }}">ปีงบประมาณ พ.ศ. 2565</a>
                                </li>
                            </ul>
                        </li> */}
                        {/* <li>
                            <a href="{{ url('/') }}">การกำกับติดตามการดำเนินงาน</a>
                        </li> */} -->
                        <li>
                            <a href="{{ url('/annual-reports') }}">รายงานประจำปี</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="#" target="_self"><i class="fas fa-stethoscope"></i> บริการ</a>
                    <ul>
                        <li>
                            <a href="{{ url('/info-center') }}">ศูนย์ข้อมูลข่าวสาร</a>
                        </li>
                        <li>
                            <a href="{{ url('/appeal') }}">ศูนย์ราชการใสสะอาด</a>
                        </li>
                        <li>
                            <a href="{{ url('/moral-org') }}">องค์กรคุณธรรมต้นแบบ</a>
                        </li>
                        <!-- {/* <li>
                            <a href="https://secret.dmh.go.th/main" target="_blank">แจ้งเรื่องร้องเรียน</a>
                        </li> */} -->
                        <li class="has-sub">
                            <a href="#" target="_self">แจ้งเรื่องร้องเรียน</a>
                            <ul>
                                <li>
                                    <a href="https://mhc9dmh.com/oldweb/Comment.aspx" target="_blank">
                                        แจ้งเรื่องร้องเรียน MHC9
                                    </a>
                                </li>
                                <li>
                                    <a href="https://secret.dmh.go.th/main/" target="_blank">
                                        แจ้งเรื่องร้องเรียน กรมสุขภาพจิต
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="https://mhc9dmh.com/oldweb/Query.aspx" target="_blank">กระดานถาม-ตอบ</a>
                        </li>
                        <!-- {/* <li>
                            <a href="">คำถามที่ถามบ่อย (FAQ)</a>
                        </li> */} -->
                        <li class="has-sub">
                            <a href="#" target="_self">คลังความรู้</a>
                            <ul>
                                <li>
                                    <a href="{{ url('/knowledges') }}">
                                        คลังความรู้ MHC9
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.dmh-elibrary.org/" target="_blank">
                                        คลังความรู้ กรมสุขภาพจิต
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.thaidmh-elibrary.org/" target="_blank">
                                        ห้องสมุด กรมสุขภาพจิต (DMH e-Library)
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="#" target="_self">สื่อสุขภาพจิต</a>
                            <ul>
                                <li>
                                    <a href="{{ url('/articles') }}">บทความสุขภาพจิต</a>
                                </li>
                                <li>
                                    <a href="{{ url('/videos') }}">วีดิโอสุขภาพจิต</a>
                                </li>
                                <li>
                                    <a href="{{ url('/infographics') }}">อินโฟกราฟฟิก</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('/e-services') }}">ระบบสารสนเทศ (E-Service)</a>
                        </li>
                        <li>
                            <a href="{{ url('/downloads') }}" target="_self">ดาวน์โหลดเอกสาร</a>
                        </li>
                        <!-- {/* <li>
                            <a href="">บริการอื่นๆ</a>
                        </li> */} -->
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="#" target="_self"><i class="fas fa-bullhorn"></i> ข่าวประชาสัมพันธ์</a>
                    <ul>
                        <li><a href="{{ url('/posts') }}">ข่าวกิจกรรม</a></li>
                        <li><a href="{{ url('/newses/category/3') }}">ข่าวจัดซื้อจัดจ้าง</a></li>
                        <!-- <li class="has-sub">
                            <a href="#" target="_self">ข่าวจัดซื้อจัดจ้าง</a>
                            <ul>
                                <li>
                                    <a href="{{ url('/newses/category/3') }}">แผนการจัดซื้อจัดจ้าง</a>
                                </li>
                                <li>
                                    <a href="{{ url('/newses/category/3') }}">ประกาศราคากลาง</a>
                                </li>
                                <li>
                                    <a href="{{ url('/newses/category/3') }}">ประกาศร่าง TOR</a>
                                </li>
                                <li>
                                    <a href="{{ url('/newses/category/3') }}">ประกาศจัดซื้อจัดจ้าง</a>
                                </li>
                                <li>
                                    <a href="{{ url('/newses/category/3') }}">ประกาศผู้ชนะการเสนอราคา</a>
                                </li>
                            </ul>    
                        </li> -->
                        <li>
                            <a href="{{ url('/newses/category/4') }}">ข่าวรับสมัครงาน</a>
                        </li>
                        <li>
                            <a href="{{ url('/newses/category/5') }}">ข่าวประกาศ</a>
                        </li>
                        <li>
                            <a href="{{ url('/') }}">MHC9 News</a>
                        </li>
                        <li>
                            <a href="{{ url('/calendar') }}">ปฏิทินกิจกรรม</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="#" target="_self"><i class="far fa-address-book"></i> ติดต่อเรา</a>
                    <ul>
                        <li>
                            <a href="{{ url('/contact') }}">ติดต่อเรา</a>
                        </li>
                        <li>
                            <a href="{{ url('/links') }}">ลิงค์ที่เกี่ยวข้อง</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>