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
                        {/* <MenuHero imgSrc="/01.png" /> */}

                        <div className="submenus">
                            <div className="submenu ">
                                <Link to="about" target="_self">ประวัติความเป็นมา</Link>
                            </div>
                            <div className="submenu ">
                                <Link to="vision" target="_self">วิสัยทัศน์ พันธกิจ ค่านิยม</Link>
                            </div>
                            <div className="submenu ">
                                <Link to="/executives" target="_self">ผู้บริหารหน่วยงาน</Link>
                            </div>
                            <div className="submenu ">
                                <Link to="/structure" target="_self">โครงสร้างองค์กร</Link>
                            </div>
                            <div className="submenu ">
                                <a href="#" target="_self">ภารกิจและหน้าที่รับผิดชอบ</a>
                            </div>
                            {/* <div className="submenu ">
                                <a href="#" target="_self">หน่วยงานในสังกัดกรมอนามัย</a>
                            </div> */}
                            {/* <div className="submenu has-children">
                                <a href="#" target="_self">CIO กรมอนามัย</a>
                                <div className="child-container">
                                    <div className="childs">
                                        <div className="child">
                                            <a href="#" target="_self">ประวัติ CIO</a>
                                        </div>
                                        <div className="child">
                                            <a href="#" target="_self">
                                                แผนปฏิบัติการดิจิทัล
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> */}
                            <div className="submenu has-children">
                                <a href="#" target="_self">คำรับรองและรายงานผลการปฏิบัติราชการ</a>
                                <div className="child-container">
                                    <div className="childs">
                                        <div className="child">
                                            <a href="#" target="_self">ปีงบประมาณ พ.ศ. 2559</a>
                                        </div>
                                        <div className="child">
                                            <a href="#" target="_blank" rel="noreferrer">ปีงบประมาณ พ.ศ. 2558</a>
                                        </div>
                                        <div className="child">
                                            <a href="#" target="_self">ปีงบประมาณ พ.ศ. 2557</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="submenus">
                            <div className="submenu ">
                                <a href="#" target="_self">กฎ ระเบียบ ข้อบังคับ</a>
                            </div>
                            <div className="submenu ">
                                <a href="#" target="_self">คู่มือ/ระเบียบปฏิบัติ</a>
                            </div>
                            {/* <div className="submenu ">
                                <a href="#" target="_blank" rel="noreferrer">บริหารทรัพยากรบุคคล</a>
                            </div> */}
                            <div className="submenu has-children">
                                <a href="#" target="_self">แผนยุทธศาสตร์</a>
                                <div className="child-container">
                                    <div className="childs">
                                        <div className="child">
                                            <a href="#" target="_blank" rel="noreferrer">แผนปฏิบัติราชการ</a>
                                        </div>
                                        <div className="child">
                                            <a href="#" target="_blank" rel="noreferrer">แผนปฏิบัติการ</a>
                                        </div>
                                        <div className="child">
                                            <a href="#" target="_blank" rel="noreferrer">แผนยุทธศาสตร์</a>
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
                            <div className="submenu ">
                                <a href="#" target="_blank" rel="noreferrer">การกำกับติดตามการดำเนินงาน</a>
                            </div>
                            <div className="submenu ">
                                <a href="#" target="_blank" rel="noreferrer">รายงานประจำปี</a>
                            </div>
                            <div className="submenu ">
                                <a href="#" target="_self">ดาวน์โหลดเอกสารที่เกี่ยวข้อง</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {/* <MenuItem /> */}

            <div className="menu has-children ">
                <a href="#" target="_self"><div>บริการประชาชน</div></a>
                <div className="submenu-container ">
                    <div className="wrapper">
                        {/* <MenuHero imgSrc="/02.png" /> */}

                        <div className="submenus">
                            <div className="submenu ">
                                <a href="#" target="_self">คู่มือการให้บริการ</a>
                            </div>
                            <div className="submenu ">
                                <a href="#" target="_self">แจ้งเรื่องร้องเรียน</a>
                            </div>
                            {/* <div className="submenu ">
                                <a href="#" target="_self">แจ้งเรื่องร้องเรียนการทุจริตและประพฤติมิชอบ</a>
                            </div> */}
                            <div className="submenu ">
                                <a href="#" target="_self">คำถามที่ถามบ่อย (FAQ)</a>
                            </div>
                            <div className="submenu ">
                                <a href="#" target="_self">กระดานถาม-ตอบ</a>
                            </div>
                            {/* <div className="submenu has-children">
                                <a href="#" target="_self">ความรู้สุขภาพ</a>
                                <div className="child-container">
                                    <div className="childs">
                                        <div className="child">
                                            <a href="#" target="_self">อนามัยแม่และเด็ก</a>
                                        </div>
                                        <div className="child">
                                            <a href="#" target="_self">อนามัยผู้สูงอายุ</a>
                                        </div>
                                        <div className="child">
                                            <a href="#" target="_self">อนามัยวัยเรียน วัยรุ่น</a>
                                        </div>
                                        <div className="child">
                                            <a href="#" target="_self">อนามัยวัยทำงาน</a>
                                        </div>
                                        <div className="child">
                                            <a href="#" target="_self">อนามัยสิ่งแวดล้อม</a>
                                        </div>
                                        <div className="child">
                                            <a href="#" target="_self">ทันตสาธารณสุข</a>
                                        </div>
                                        <div className="child">
                                            <a href="#" target="_self">โภชนาการ</a>
                                        </div>
                                        <div className="child">
                                            <a href="#" target="_self">ออกกำลังกายเพื่อสุขภาพ</a>
                                        </div>
                                        <div className="child">
                                            <a href="#" target="_self">Rap porteur</a>
                                        </div>
                                    </div>
                                </div>
                            </div> */}
                            <div className="submenu has-children">
                                <a href="#" target="_self">สื่อสุขภาพจิต</a>
                                <div className="child-container">
                                    <div className="childs">
                                        <div className="child">
                                            <a href="#" target="_self">คลิปวีดิโอสุขภาพ</a>
                                        </div>
                                        <div className="child">
                                            <a href="#" target="_self">อินโฟกราฟฟิก</a>
                                        </div>
                                        <div className="child">
                                            <a href="#" target="_self">วารสารออนไลน์</a>
                                        </div>
                                        {/* <div className="child">
                                            <a href="#" target="_self">อนามัยบุ๊ค</a>
                                        </div> */}
                                    </div>
                                </div>
                            </div>
                            <div className="submenu">
                                <a href="#" target="_self">บริการอื่นๆ (E-Services)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div className="menu has-children ">
                <a href="#" target="_self"><div>ติดต่อเรา</div></a>
                <div className="submenu-container expand-left">
                    <div className="wrapper">                        
                        {/* <MenuHero imgSrc="/05.png" /> */}

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
                <a className="global-search-toggle" href="#">
                    <div><i className="fas fa-search"></i></div>
                </a>
            </div>
            {/* /.menu */}
        </div>
    )
}

export default NavMenu;
