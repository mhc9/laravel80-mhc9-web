import React, { useState } from 'react'
import CookieConsent from './shared/CookieConsent'
import SocialIcons from './shared/SocialIcons'

const Footer = () => {
    const [showCookie, setShowCookie] = useState(true);

    return (
        <footer>
            {/* Container */}
            <div className="footer-top container">
                <div>
                    {/* Row */}
                    <div className="footer-row">
                        {/* Col */}
                        <div className="footer-col">
                            <h2>รู้จักเรา</h2>
                            <ul>
                                <li><a href="#">ประวัติความเป็นมา</a></li>
                                <li><a href="#">วิสัยทัศน์ พันธกิจ</a></li>
                                <li><a href="#">ผู้บริการหน่วยงาน</a></li>
                                <li><a href="#">โครงสร้างองค์กร</a></li>
                                <li><a href="#">ภารกิจและหน้าที่รับผิดชอบ</a></li>
                            </ul>
                        </div>
                        {/* Col */}
                        <div className="footer-col">
                            <h2>บริการประชาชน</h2>
                            <ul>
                                <li><a href="#">คู่มือการให้บริการ</a></li>
                                <li><a href="#">แจ้งเรื่องร้องเรียน</a></li>
                                <li><a href="#">คำถามที่ถามบ่อย (FAQ)</a></li>
                                <li><a href="#">สื่อสุขภาพจิต</a></li>
                                <li><a href="#">บริการ E-Services</a></li>
                            </ul>
                        </div>

                        {/* Col */}
                        <div className="footer-col">
                            <h2>สำหรับเจ้าหน้าที่</h2>
                            <ul>
                                <li><a href="#">ระบบ WPM</a></li>
                                <li><a href="#">ระบบงานสารบรรณอิเล็กทรอนิกส์</a></li>
                                <li><a href="#">ระบบเพิ่มประสิทธิภาพการจัดการงบประมาณและแผนงาน (B&P DMH)</a></li>
                                <li><a href="#">ระบบงานบุคลากร</a></li>
                            </ul>
                        </div>

                        {/* Col */}
                        <div className="footer-col">
                            <h2>ติอต่อเรา</h2>
                            <ul>
                                <li><a href="/">ศูนย์สุขภาพจิตที่ 9</a></li>
                                <li>เลขที่ 86 ถ.ช้างเผือก อ.เมือง จ.นครราชสีมา 30000</li>
                                <li>โทรศัพท์ 0-4425-6729</li>
                                <li>โทรสาร 0-4425-6730</li>
                                <li>อีเมล mhc9dmh@gmail.com</li>
                            </ul>

                            <SocialIcons />
                        </div>
                    </div>
                    {/* Row */}
                    <div className="footer-row">

                    </div>
                </div>
            </div>
            <div className="footer-bottom">
                <div>
                    ©2020 ศูนย์สุขภาพจิตที่ 9 All Rights Reserved | DESIGNED BY 
                    <a href="https://www.query-studio.com" target="_blank" rel="noreferrer">
                        นายสัญญา ธรรมวงษ์
                    </a>
                </div>
            </div>

            <CookieConsent
                isShow={showCookie}
                onHide={() => setShowCookie(false)}
            />
        </footer>
    )
}

export default Footer