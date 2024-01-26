import React, { useEffect, useState } from 'react'
import { Link } from 'react-router-dom'
import { useCookies } from 'react-cookie'
import CookieConsent from './shared/CookieConsent'
import SocialIcons from './shared/SocialIcons'
import services from '../data/officer-services.json'

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
                                <li><Link to="/authority">หน้าที่และอำนาจ</Link></li>
                                <li><Link to="/procedures">มาตรฐานการปฏิบัติงาน</Link></li>
                                <li><Link to="/manuals">มาตรฐานการให้บริการ</Link></li>
                                <li><Link to="/laws">กฎ ระเบียบ ข้อบังคับ</Link></li>
                                <li><Link to="/policies">นโยบายองค์กร</Link></li>
                                <li><Link to="/annual-reports">รายงานประจำปี</Link></li>
                            </ul>
                        </div>
                        {/* Col */}
                        <div className="footer-col footer-menu">
                            <h2>บริการ</h2>
                            <ul>
                                <li><Link to="/">ศูนย์ข้อมูลข่าวสาร</Link></li>
                                <li><Link to="/appeal">ศูนย์ราชการใสสะอาด</Link></li>
                                <li><a href="https://secret.dmh.go.th/main" target="_blank">แจ้งเรื่องร้องเรียน</a></li>
                                <li><a href="https://mhc9dmh.com/Query.aspx" target="_blank">กระดานถาม-ตอบ</a></li>
                                {/* <li><Link to="/faq">คำถามที่ถามบ่อย (FAQ)</Link></li> */}
                                <li><Link to="/e-services">ระบบสารสนเทศ (E-Service)</Link></li>
                                <li><Link to="/downloads">ดาวน์โหลดเอกสาร</Link></li>
                            </ul>
                        </div>

                        {/* Col */}
                        <div className="footer-col footer-menu">
                            <h2>สำหรับเจ้าหน้าที่</h2>
                            <ul>
                                {services.map(service => (
                                    <li key={service.id}>
                                        <a href={service.link} target='_blank'>{service.name}</a>
                                    </li>
                                ))}
                            </ul>
                        </div>

                        {/* Col */}
                        <div className="footer-col footer-menu">
                            <h2>ติอต่อเรา</h2>
                            <ul className="footer-address">
                                <li>ศูนย์สุขภาพจิตที่ 9</li>
                                <li>เลขที่ 86 ถ.ช้างเผือก ต.ในเมือง อ.เมือง จ.นครราชสีมา 30000</li>
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