import React, { useEffect, useState } from 'react'
import { Link } from 'react-router-dom'
import { useCookies } from 'react-cookie'
import CookieConsent from './shared/CookieConsent'
import SocialIcons from './shared/SocialIcons'

const Footer = () => {
    const [showCookie, setShowCookie] = useState(true);
    const [cookies, setCookies] = useCookies(['mhc9_consent']);
    
    useEffect(() => {
        if (cookies.mhc9_consent) setShowCookie(false);
    }, [cookies]);

    return (
        <footer>
            {/* Container */}
            <div className="footer-top container">
                <div>
                    {/* Row */}
                    <div className="footer-row">
                        {/* Col */}
                        <div className="footer-col footer-menu">
                            <h2>รู้จักเรา</h2>
                            <ul>
                                <li><Link to="/about">ประวัติความเป็นมา</Link></li>
                                <li><Link to="/vision">วิสัยทัศน์/พันธกิจ/ค่านิยม</Link></li>
                                <li><Link to="/executives">ผู้บริหารหน่วยงาน</Link></li>
                                <li><Link to="/structure">โครงสร้างองค์กร</Link></li>
                                <li><Link to="/">หน้าที่และอำนาจ</Link></li>
                            </ul>
                        </div>
                        {/* Col */}
                        <div className="footer-col footer-menu">
                            <h2>บริการประชาชน</h2>
                            <ul>
                                <li><Link to="/manuals">คู่มือการให้บริการ</Link></li>
                                <li><Link to="#">แจ้งเรื่องร้องเรียน</Link></li>
                                <li><Link to="/faq">คำถามที่ถามบ่อย (FAQ)</Link></li>
                                <li><Link to="#">สื่อสุขภาพจิต</Link></li>
                                <li><Link to="/downloads">ดาวน์โหลดเอกสาร</Link></li>
                            </ul>
                        </div>

                        {/* Col */}
                        <div className="footer-col footer-menu">
                            <h2>สำหรับเจ้าหน้าที่</h2>
                            <ul>
                                <li><a href="https://www.mhc9dmh.com/loginmhc.aspx" target="_blank">ระบบ WPM</a></li>
                                <li><a href="https://edc.dmh.go.th" target="_blank">ระบบงานสารบรรณอิเล็กทรอนิกส์</a></li>
                                <li><a href="http://dpis.dmh.go.th" target="_blank">ระบบสารสนเทศทรัพยากรบุคคล (DPIS)</a></li>
                                <li><a href="https://finance.dmh.go.th/intranet" target="_blank">ระบบ E-Pay slip</a></li>
                                <li><a href="https://bp.dmh.go.th/DMH_PROJECT" target="_blank">ระบบเพิ่มประสิทธิภาพการจัดการงบประมาณและแผนงาน (B&P DMH)</a></li>
                            </ul>
                        </div>

                        {/* Col */}
                        <div className="footer-col footer-menu">
                            <h2>ติอต่อเรา</h2>
                            <ul className="footer-address">
                                <li>ศูนย์สุขภาพจิตที่ 9</li>
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
                        <div className="footer-col footer-policy">
                            <div className="standard-wrapper">
                                <div className="standard-logo">
                                    <img src="https://anamai.moph.go.th/assets/app/images/icon/ipv6.png" alt="standard-logo" />
                                </div>
                                <div className="standard-logo">
                                    <img src="https://anamai.moph.go.th/assets/app/images/icon/w3c.png" alt="standard-logo" />
                                </div>
                            </div>
                            <div className="policy-wrapper">
                                <Link to="/website-policy">นโยบายเว็บไซต์</Link> |
                                <Link to="/">นโยบายการคุ้มครองข้อมูลส่วนบุคคล</Link> |
                                <Link to="/">นโยบายการรักษาความมั่นคงปลอดภัยเว็บไซต์</Link>
                            </div>
                        </div>
                        <div className="footer-col footer-stat">
                            {/* <i className="fas fa-users"></i> */}
                        </div>
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
                onSetCookie={setCookies}
            />
        </footer>
    )
}

export default Footer