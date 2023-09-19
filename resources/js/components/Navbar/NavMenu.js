import React from 'react'
import { Link } from 'react-router-dom';
// import MenuItem from '../menu-item'
// import MenuHero from '../menu-item/menu-hero'

const NavMenu = () => {
    return (
        <div className="bottom-menu" id="topnav-menu-container">
            <div className="menu icon-menu active">
                <Link to="/" data-label="หน้าหลัก">
                    <div><i className="fas fa-home"></i></div>
                </Link>
            </div>
            <div className="menu has-children ">
                <a href="#" target="_self"><div>รู้จักเรา</div></a>
                <div className="submenu-container ">
                    <div className="wrapper">
                        {/* <MenuHero title="รู้จักเรา" imgSrc="/01.png" /> */}

                        <div className="submenus">
                            <div className="submenu ">
                                <Link to="/about" target="_self">ประวัติความเป็นมา</Link>
                            </div>
                            <div className="submenu ">
                                <Link to="/vision" target="_self">วิสัยทัศน์ พันธกิจ ค่านิยม</Link>
                            </div>
                            <div className="submenu ">
                                <Link to="/executives" target="_self">ผู้บริหารหน่วยงาน</Link>
                            </div>
                            <div className="submenu ">
                                <Link to="/structure" target="_self">โครงสร้างองค์กร</Link>
                            </div>
                            <div className="submenu ">
                                <Link to="/authority" target="_self">หน้าที่และอำนาจ</Link>
                            </div>
                            <div className="submenu ">
                                <Link to="/laws" target="_self">กฎ ระเบียบ ข้อบังคับ</Link>
                            </div>
                        </div>
                        <div className="submenus">
                            <div className="submenu ">
                                <Link to="policies" target="_self">นโยบายองค์กร</Link>
                            </div>
                            <div className="submenu has-children">
                                <a href="#" target="_self">แผนยุทธศาสตร์</a>
                                <div className="child-container">
                                    <div className="childs">
                                        <div className="child">
                                            <a href="#" target="_blank" rel="noreferrer">แผนยุทธศาสตร์</a>
                                        </div>
                                        <div className="child">
                                            <a href="#" target="_blank" rel="noreferrer">แผนปฏิบัติราชการ</a>
                                        </div>
                                        <div className="child">
                                            <a href="#" target="_blank" rel="noreferrer">แผนปฏิบัติการ</a>
                                        </div>
                                        {/* <div className="child">
                                            <a href="#" target="_blank" rel="noreferrer">แผนระดับ 3 ในความรับผิดชอบ</a>
                                        </div>
                                        <div className="child">
                                            <a href="#" target="_self">แผนยุทธศาสตร์บูรณาการ</a>
                                        </div> */}
                                    </div>
                                </div>
                            </div>
                            <div className="submenu has-children">
                                <a href="#" target="_self">คำรับรองและรายงานผลการปฏิบัติราชการ</a>
                                <div className="child-container">
                                    <div className="childs">
                                        <div className="child">
                                            <a href="#" target="_self">ปีงบประมาณ พ.ศ. 2566</a>
                                        </div>
                                        <div className="child">
                                            <a href="#" target="_self">ปีงบประมาณ พ.ศ. 2565</a>
                                        </div>
                                        <div className="child">
                                            <a href="#" target="_self">ปีงบประมาณ พ.ศ. 2564</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="submenu ">
                                <a href="#" target="_self">การกำกับติดตามการดำเนินงาน</a>
                            </div>
                            <div className="submenu ">
                                <Link to="annual-reports" target="_self">รายงานประจำปี</Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div className="menu has-children ">
                <a href="#" target="_self"><div>บริการ</div></a>
                <div className="submenu-container ">
                    <div className="wrapper">
                        {/* <MenuHero title="บริการประชาชน" imgSrc="/02.png" /> */}

                        <div className="submenus">
                            <div className="submenu ">
                                <Link to="/manuals" target="_self">คู่มือการให้บริการ</Link>
                            </div>
                            <div className="submenu ">
                                <a href="#" target="_self">ศูนย์ข้อมูลข่าวสาร</a>
                            </div>
                            <div className="submenu ">
                                <a href="#" target="_self">ศูนย์ราชการใสสะอาด</a>
                            </div>
                            <div className="submenu ">
                                <a href="#" target="_self">ศูนย์ปฏิบัติการต่อต้านการทุจริต</a>
                            </div>
                            <div className="submenu has-children">
                                <a href="#" target="_self">คลังความรู้</a>
                                <div className="child-container">
                                    <div className="childs">
                                        <div className="child">
                                            <a href="#" target="_self">คลังความรู้ MHC9</a>
                                        </div>
                                        <div className="child">
                                            <a href="#" target="_self">คลังความรู้ กรมสุขภาพจิต</a>
                                        </div>
                                        <div className="child">
                                            <a href="#" target="_self">ห้องสมุด กรมสุขภาพจิต (DMH e-Library)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="submenu has-children">
                                <a href="#" target="_self">สื่อสุขภาพจิต</a>
                                <div className="child-container">
                                    <div className="childs">
                                        <div className="child">
                                            <a href="#" target="_self">วีดิโอสุขภาพจิต</a>
                                        </div>
                                        <div className="child">
                                            <a href="#" target="_self">อินโฟกราฟฟิก</a>
                                        </div>
                                        <div className="child">
                                            <a href="#" target="_self">บทความสุขภาพจิต</a>
                                        </div>
                                        {/* <div className="child">
                                            <a href="#" target="_self">อนามัยบุ๊ค</a>
                                        </div> */}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="submenus">
                            <div className="submenu ">
                                <a href="#" target="_self">แจ้งเรื่องร้องเรียน</a>
                            </div>
                            <div className="submenu ">
                                <a href="#" target="_self">ระบบสารสนเทศ</a>
                            </div>
                            <div className="submenu ">
                                <Link to="/faq" target="_self">คำถามที่ถามบ่อย (FAQ)</Link>
                            </div>
                            <div className="submenu ">
                                <a href="#" target="_self">กระดานถาม-ตอบ</a>
                            </div>
                            <div className="submenu ">
                                <Link to="/downloads" target="_self">ดาวน์โหลดเอกสาร</Link>
                            </div>
                            <div className="submenu">
                                <a href="#" target="_self">บริการอื่นๆ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div className="menu has-children ">
                <a href="#" target="_self"><div>ข่าวประชาสัมพันธ์</div></a>
                    <div className="submenu-container ">
                    <div className="wrapper">
                        {/* <MenuHero title="ข่าวประชาสัมพันธ์" imgSrc="/03.png" /> */}

                        <div className="submenus">
                            <div className="submenu ">
                                <Link to="/post/list" target="_self">
                                    ข่าวกิจกรรม
                                </Link>
                            </div>
                            {/* <div className="submenu ">
                                <Link to="#" target="_self">
                                    ข่าวประชาสัมพันธ์ส่วนกลาง
                                </Link>
                            </div> */}
                            <div className="submenu has-children">
                                <a to="#" target="_self">
                                    ข่าวจัดซื้อจัดจ้าง
                                </a>
                                <div className="child-container">
                                    <div className="childs">
                                        <div className="child">
                                            <Link to="news/1/list" target="_self">แผนการจัดซื้อจัดจ้าง</Link>
                                        </div>
                                        <div className="child">
                                            <Link to="news/1/list" target="_self">ประกาศราคากลาง</Link>
                                        </div>
                                        <div className="child">
                                            <Link to="news/1/list" target="_self">ประกาศร่าง TOR</Link>
                                        </div>
                                        <div className="child">
                                            <Link to="news/1/list" target="_self">ประกาศจัดซื้อจัดจ้าง</Link>
                                        </div>
                                        <div className="child">
                                            <Link to="news/1/list" target="_self">ประกาศผู้ชนะการเสนอราคา</Link>
                                        </div>
                                        {/* <div className="child">
                                            <Link to="news/1/list" target="_self">สรุปผลการจัดซื้อจัดจ้าง</Link>
                                        </div> */}
                                    </div>
                                </div>
                            </div>
                            <div className="submenu ">
                                <Link to="/news/2/list" target="_self">ข่าวรับสมัครงาน</Link>
                            </div>
                            <div className="submenu ">
                                <Link to="/news/3/list" target="_self">ข่าวประกาศ</Link>
                            </div>
                            <div className="submenu ">
                                <Link to="/calendar" target="_self">ปฏิทินกิจกรรม</Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div className="menu has-children ">
                <a href="#" target="_self"><div>ติดต่อเรา</div></a>
                <div className="submenu-container expand-left">
                    <div className="wrapper">                        
                        {/* <MenuHero title="ติดต่อเรา" imgSrc="/05.png" /> */}

                        <div className="submenus">
                            <div className="submenu ">
                                <Link to="/contact" target="_self">ติดต่อเรา</Link>
                            </div>
                            <div className="submenu ">
                                <Link to="/links" target="_self">ลิงค์ที่เกี่ยวข้อง</Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div className="menu icon-menu ">
                <a href="#" className="global-search-toggle">
                    <div><i className="fas fa-search"></i></div>
                </a>
            </div>
            <div className="menu icon-menu ">
                <a href="#" className="global-search-toggle">
                    <div><i className="fas fa-sitemap"></i></div>
                </a>
            </div>
            {/* /.menu */}
        </div>
    )
}

export default NavMenu;
