import React, { useEffect, useRef } from 'react'
import { Link } from 'react-router-dom'
import { useDispatch } from 'react-redux';
import { hideSidebar, toggleSidebar } from '../features/navbarSlice'

const Sidebar = ({ isShow, screenWidth }) => {
    const dispatch = useDispatch();
    const sidebarRef = useRef(null);

    useEffect(() => {
        window.document.addEventListener('mousedown', handleClickOutside);

        return () => window.document.removeEventListener('mousedown', handleClickOutside);
    }, []);

    useEffect(() => {
        if (screenWidth > 1199) dispatch(hideSidebar());
    }, [screenWidth]);

    const handleClickOutside = (e) => {
        /** Get mobile menu element from document */
        const mobileMenu = window.document.querySelector('.mobile-menu');

        if (sidebarRef.current && !sidebarRef.current.contains(e.target)) {
            dispatch(hideSidebar());
        }
    };

    return (
        <div className="sidebar" style={{ visibility: isShow ? 'visible' : 'hidden'}} ref={sidebarRef}>
            <div className="sidebar-wrapper">
                <span className="close-btn" onClick={() => dispatch(toggleSidebar())}>
                    <i className="fas fa-times"></i>
                </span>
                <div className="navigation">
                    <ul>
                        <li><Link to="/" onClick={() => dispatch(toggleSidebar())}>หน้าหลัก</Link></li>
                        <li className="has-sub">
                            <a href="#"><i className="fas fa-home"></i> รู้จักเรา</a>
                            <ul>
                                <li><Link to="/about" onClick={() => dispatch(toggleSidebar())}>ประวัติความเป็นมา</Link></li>
                                <li><Link to="/vision" onClick={() => dispatch(toggleSidebar())}>วิสัยทัศน์ พันธกิจ ค่านิยม</Link></li>
                                <li><Link to="/executives" onClick={() => dispatch(toggleSidebar())}>ผู้บริหารหน่วยงาน</Link></li>
                                <li><Link to="/structure" onClick={() => dispatch(toggleSidebar())}>โครงสร้างองค์กร</Link></li>
                                <li><Link to="/mission" onClick={() => dispatch(toggleSidebar())}>ภารกิจและหน้าที่รับผิดชอบ</Link></li>
                                <li className="has-sub text-sm">
                                    <a href="#">คำรับรองและรายงานผลการปฏิบัติราชการ</a>
                                    <ul>
                                        <li><Link to="/" onClick={() => dispatch(toggleSidebar())}>ปีงบประมาณ พ.ศ. 2566</Link></li>
                                        <li><Link to="/" onClick={() => dispatch(toggleSidebar())}>ปีงบประมาณ พ.ศ. 2565</Link></li>
                                    </ul>
                                </li>
                                <li><Link to="/" onClick={() => dispatch(toggleSidebar())}>กฎ ระเบียบ ข้อบังคับ</Link></li>
                                <li><Link to="/" onClick={() => dispatch(toggleSidebar())}>คู่มือ/ระเบียบปฏิบัติ</Link></li>
                                <li className="has-sub text-sm">
                                    <a href="#">แผนยุทธศาสตร์</a>
                                    <ul>
                                        <li><Link to="/" onClick={() => dispatch(toggleSidebar())}>แผนยุทธศาสตร์</Link></li>
                                        <li><Link to="/" onClick={() => dispatch(toggleSidebar())}>แผนปฏิบัติราชการ</Link></li>
                                        <li><Link to="/" onClick={() => dispatch(toggleSidebar())}>แผนปฏิบัติการ</Link></li>
                                    </ul>
                                </li>
                                <li><Link to="/" onClick={() => dispatch(toggleSidebar())}>การกำกับติดตามการดำเนินงาน</Link></li>
                                <li><Link to="/" onClick={() => dispatch(toggleSidebar())}>รายงานประจำปี</Link></li>
                            </ul>
                        </li>
                        <li className="has-sub">
                            <a href=""><i className="fas fa-stethoscope"></i> บริการประชาชน</a>
                            <ul>
                                <li><a href="">คู่มือการให้บริการ</a></li>
                                <li><a href="">ศูนย์ข้อมูลข่าวสาร</a></li>
                                <li><a href="">ศูนย์ราชการใสสะอาด</a></li>
                                <li><a href="">ศูนย์ปฏิบัติการต่อต้านการทุจริต</a></li>
                                <li>
                                    <a href="#">คลังความรู้</a>
                                    <ul>
                                        <li><Link to="/" onClick={() => dispatch(toggleSidebar())}>คลังความรู้ MHC9</Link></li>
                                        <li><Link to="/" onClick={() => dispatch(toggleSidebar())}>คลังความรู้ กรมสุขภาพจิต</Link></li>
                                        <li><Link to="/" onClick={() => dispatch(toggleSidebar())}>ห้องสมุด กรมสุขภาพจิต (DMH e-Library)</Link></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">สื่อสุขภาพจิต</a>
                                    <ul>
                                        <li><Link to="/" onClick={() => dispatch(toggleSidebar())}>วีดิโอสุขภาพจิต</Link></li>
                                        <li><Link to="/" onClick={() => dispatch(toggleSidebar())}>อินโฟกราฟฟิก</Link></li>
                                        <li><Link to="/" onClick={() => dispatch(toggleSidebar())}>บทความสุขภาพจิต</Link></li>
                                    </ul>
                                </li>
                                <li><a href="">แจ้งเรื่องร้องเรียน</a></li>
                                <li><a href="">ระบบสารสนเทศ</a></li>
                                <li><a href="">คำถามที่ถามบ่อย (FAQ)</a></li>
                                <li><a href="">กระดานถาม-ตอบ</a></li>
                                <li><a href="">ดาวน์โหลดเอกสาร</a></li>
                                <li><a href="">บริการอื่นๆ</a></li>
                            </ul>
                        </li>
                        <li className="has-sub">
                            <a href=""><i className="fas fa-bullhorn"></i> ข่าวประชาสัมพันธ์</a>
                            <ul>
                                <li><a href="">ข่าวกิจกรรม</a></li>
                                <li className="has-sub">
                                    <a href="#">ข่าวจัดซื้อจัดจ้าง</a>
                                    <ul>
                                        <li><Link to="/news/1/list" onClick={() => dispatch(toggleSidebar())}>แผนการจัดซื้อจัดจ้าง</Link></li>
                                        <li><Link to="/news/1/list" onClick={() => dispatch(toggleSidebar())}>ประกาศราคากลาง</Link></li>
                                        <li><Link to="/news/1/list" onClick={() => dispatch(toggleSidebar())}>ประกาศร่าง TOR</Link></li>
                                        <li><Link to="/news/1/list" onClick={() => dispatch(toggleSidebar())}>ประกาศจัดซื้อจัดจ้าง</Link></li>
                                        <li><Link to="/news/1/list" onClick={() => dispatch(toggleSidebar())}>ประกาศผู้ชนะการเสนอราคา</Link></li>
                                    </ul>    
                                </li>
                                <li><Link to="/news/2/list">ข่าวรับสมัครงาน</Link></li>
                                <li><Link to="/news/3/list">ข่าวประกาศ</Link></li>
                                <li><Link to="/calendar" onClick={() => dispatch(toggleSidebar())}>ปฏิทินกิจกรรม</Link></li>
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