import React, { useRef } from 'react'
import { Link } from 'react-router-dom'
import { useDispatch } from 'react-redux';
import { hideSidebar, toggleSidebar } from '../features/navbarSlice'

const Sidebar = ({ isShow }) => {
    const dispatch = useDispatch();
    const sidebarRef = useRef(null);

    return (
        <div className="sidebar" style={{ display: isShow ? 'block' : 'none'}} ref={sidebarRef}>
            <div className="sidebar-wrapper">
                <a href="#" className="close-btn" onClick={() => dispatch(toggleSidebar())}>
                    <span><i className="fas fa-times"></i></span>
                </a>
                <div className="navigation">
                    <ul>
                        <li><Link to="/" onClick={() => dispatch(toggleSidebar())}>หน้าหลัก</Link></li>
                        <li className="has-sub">
                            <a href=""><i className="fas fa-home"></i> รู้จักเรา</a>
                            <ul>
                                <li><Link to="/about" onClick={() => dispatch(toggleSidebar())}>ประวัติความเป็นมา</Link></li>
                                <li><Link to="/vision" onClick={() => dispatch(toggleSidebar())}>วิสัยทัศน์ พันธกิจ ค่านิยม</Link></li>
                                <li><Link to="/executives" onClick={() => dispatch(toggleSidebar())}>ผู้บริหารหน่วยงาน</Link></li>
                                <li><Link to="/structure" onClick={() => dispatch(toggleSidebar())}>โครงสร้างองค์กร</Link></li>
                                <li><Link to="/mission" onClick={() => dispatch(toggleSidebar())}>ภารกิจและหน้าที่รับผิดชอบ</Link></li>
                                <li className="has-sub text-sm">
                                    <a href="">คำรับรองและรายงานผลการปฏิบัติราชการ</a>
                                    <ul>
                                        <li><Link to="/" onClick={() => dispatch(toggleSidebar())}>ปีงบประมาณ พ.ศ. 2566</Link></li>
                                        <li><Link to="/" onClick={() => dispatch(toggleSidebar())}>ปีงบประมาณ พ.ศ. 2565</Link></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li className="has-sub">
                            <a href=""><i className="fas fa-bullhorn"></i> ข่าวประชาสัมพันธ์</a>
                            <ul>
                                <li><a href="">ข่าวกิจกรรม</a></li>
                                <li className="has-sub">
                                    <a href="">ข่าวจัดซื้อจัดจ้าง</a>
                                    <ul>
                                        <li><Link to="/" onClick={() => dispatch(toggleSidebar())}>แผนการจัดซื้อจัดจ้าง</Link></li>
                                        <li><Link to="/" onClick={() => dispatch(toggleSidebar())}>ประกาศราคากลาง</Link></li>
                                        <li><Link to="/" onClick={() => dispatch(toggleSidebar())}>ประกาศร่าง TOR</Link></li>
                                        <li><Link to="/" onClick={() => dispatch(toggleSidebar())}>ประกาศจัดซื้อจัดจ้าง</Link></li>
                                        <li><Link to="/" onClick={() => dispatch(toggleSidebar())}>ประกาศผู้ชนะการเสนอราคา</Link></li>
                                    </ul>    
                                </li>
                                <li><a href="">ข่าวรับสมัครงาน</a></li>
                                <li><Link href="/calendar" onClick={() => dispatch(toggleSidebar())}>ปฏิทินกิจกรรม</Link></li>
                            </ul>
                        </li>
                        <li className="has-sub">
                            <a href=""><i className="fas fa-stethoscope"></i> บริการประชาชน</a>
                            <ul>
                                <li><a href="">คู่มือการให้บริการ</a></li>
                                <li><a href="">แจ้งเรื่องร้องเรียน</a></li>
                                <li><a href="">กระดานถาม-ตอบ</a></li>
                                <li><a href="">คำถามที่ถามบ่อย (FAQ)</a></li>
                            </ul>
                        </li>
                        <li className="has-sub">
                            <a href=""><i className="far fa-address-book"></i> ติดต่อเรา</a>
                            <ul>
                                <li><Link to="/contact" onClick={() => dispatch(toggleSidebar())}>ติดต่อเรา</Link></li>
                                <li><Link to="/links" onClick={() => dispatch(toggleSidebar())}>ลิงค์ที่เกี่ยวข้อง</Link></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    )
}

export default Sidebar