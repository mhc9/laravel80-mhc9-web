<footer>
    <div class="footer-top container">
        <div>
            <!-- Row -->
            <div class="footer-row">
                <!-- Col -->
                <div class="footer-col footer-menu">
                    <h2>รู้จักเรา</h2>
                    <ul>
                        <li><a href="{{ url('/about') }}">ประวัติความเป็นมา</a></li>
                        <li><a href="{{ url('/vision') }}">วิสัยทัศน์/พันธกิจ/ค่านิยม/ตัวชี้วัด</a></li>
                        <li><a href="{{ url('/executives') }}">ผู้บริหารหน่วยงาน</a></li>
                        <li><a href="{{ url('/structure') }}">โครงสร้างองค์กร</a></li>
                        <li><a href="{{ url('/authority') }}">อำนาจหน้าที่</a></li>
                        <li><a href="{{ url('/procedures') }}">มาตรฐานการปฏิบัติงาน</a></li>
                        <li><a href="{{ url('/manuals') }}">มาตรฐานการให้บริการ</a></li>
                        <li><a href="{{ url('/laws') }}">กฎหมาย ระเบียบ ข้อบังคับ</a></li>
                        <li><a href="{{ url('/policies') }}">นโยบายองค์กร</a></li>
                        <li><a href="{{ url('/annual-reports') }}">รายงานประจำปี</a></li>
                    </ul>
                </div>

                <!-- Col -->
                <div class="footer-col footer-menu">
                    <h2>บริการ</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">ศูนย์ข้อมูลข่าวสาร</a></li>
                        <li><a href="{{ url('/appeal') }}">ศูนย์ราชการใสสะอาด</a></li>
                        <li><a href="https://secret.dmh.go.th/main" target="_blank">แจ้งเรื่องร้องเรียน</a></li>
                        <li><a href="https://mhc9dmh.com/oldweb/Query.aspx" target="_blank">กระดานถาม-ตอบ</a></li>
                        <!-- <li><a href="/faq">คำถามที่ถามบ่อย (FAQ)</a></li> -->
                        <li><a href="{{ url('/e-services') }}">ระบบสารสนเทศ (E-Service)</a></li>
                        <li><a href="{{ url('/downloads') }}">ดาวน์โหลดเอกสาร</a></li>
                    </ul>
                </div>

                <!-- Col -->
                <div class="footer-col footer-menu">
                    <h2>สำหรับเจ้าหน้าที่</h2>
                    <ul class="footer-officers"></ul>
                </div>

                <!-- Col -->
                <div class="footer-col footer-menu">
                    <h2 class="max-[640px]:hidden">ติอต่อเรา</h2>
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
                        <a href="{{ url('/') }}">นโยบายเว็บไซต์</a> |
                        <a href="{{ url('/posts/354') }}">นโยบายการคุ้มครองข้อมูลส่วนบุคคล</a> |
                        <a href="{{ url('/') }}">นโยบายการรักษาความมั่นคงปลอดภัยเว็บไซต์</a>
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
        <div class="flex max-sm:flex-col justify-center items-center">
            <span>©2020 ศูนย์สุขภาพจิตที่ 9 All Rights Reserved<span class="ml-1 sm:after:content-['|']"></span></span>
            <span class="mx-1">
                DESIGNED BY<a href="#" target="_blank" rel="noreferrer">นายสัญญา ธรรมวงษ์</a>
            </span>
        </div>
    </div>
</footer>

<script>
    $(document).ready(function () {
        services.forEach(service => {
            $('.footer-officers').append(`
                <li>
                    <a href="${service.link}" target="_blank">${service.name}</a>
                </li>
            `);
        });
    });
</script>