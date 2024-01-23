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
                        <li>
                            <Link to="/" onClick={() => dispatch(toggleSidebar())}>หน้าหลัก</Link>
                        </li>
                        <li className="has-sub">
                            <a href="#"><i className="fas fa-home"></i> รู้จักเรา</a>
                            <ul>
                                <li>
                                    <Link to="/about" onClick={() => dispatch(toggleSidebar())}>ประวัติความเป็นมา</Link>
                                </li>
                                <li>
                                    <Link to="/vision" onClick={() => dispatch(toggleSidebar())}>วิสัยทัศน์ พันธกิจ ค่านิยม</Link>
                                </li>
                                <li>
                                    <Link to="/executives" onClick={() => dispatch(toggleSidebar())}>ผู้บริหารหน่วยงาน</Link>
                                </li>
                                <li>
                                    <Link to="/structure" onClick={() => dispatch(toggleSidebar())}>โครงสร้างองค์กร</Link>
                                </li>
                                <li>
                                    <Link to="/authority" onClick={() => dispatch(toggleSidebar())}>หน้าที่และอำนาจ</Link>
                                </li>
                                <li>
                                    <Link to="/laws" onClick={() => dispatch(toggleSidebar())}>กฎ ระเบียบ ข้อบังคับ</Link>
                                </li>
                                <li>
                                    <Link to="/policies" onClick={() => dispatch(toggleSidebar())}>นโยบายองค์กร</Link>
                                </li>
                                <li className="has-sub text-sm">
                                    <a href="#">แผนยุทธศาสตร์</a>
                                    <ul>
                                        <li>
                                            <Link to="/" onClick={() => dispatch(toggleSidebar())}>แผนยุทธศาสตร์</Link>
                                        </li>
                                        <li>
                                            <Link to="/" onClick={() => dispatch(toggleSidebar())}>แผนปฏิบัติราชการ</Link>
                                        </li>
                                        <li>
                                            <Link to="/" onClick={() => dispatch(toggleSidebar())}>แผนปฏิบัติการ</Link>
                                        </li>
                                    </ul>
                                </li>
                                <li className="has-sub text-sm">
                                    <a href="#">คำรับรองและรายงานผลการปฏิบัติราชการ</a>
                                    <ul>
                                        <li>
                                            <Link to="/" onClick={() => dispatch(toggleSidebar())}>ปีงบประมาณ พ.ศ. 2566</Link>
                                        </li>
                                        <li>
                                            <Link to="/" onClick={() => dispatch(toggleSidebar())}>ปีงบประมาณ พ.ศ. 2565</Link>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <Link to="/" onClick={() => dispatch(toggleSidebar())}>การกำกับติดตามการดำเนินงาน</Link>
                                </li>
                                <li>
                                    <Link to="/annual-reports" onClick={() => dispatch(toggleSidebar())}>รายงานประจำปี</Link>
                                </li>
                            </ul>
                        </li>
                        <li className="has-sub">
                            <a href=""><i className="fas fa-stethoscope"></i> บริการ</a>
                            <ul>
                                <li>
                                    <Link to="/manuals" onClick={() => dispatch(toggleSidebar())}>คู่มือการให้บริการ</Link>
                                </li>
                                <li>
                                    <a href="" onClick={() => dispatch(toggleSidebar())}>ศูนย์ข้อมูลข่าวสาร</a>
                                </li>
                                <li>
                                    <Link to="/appeal" onClick={() => dispatch(toggleSidebar())}>ศูนย์ราชการใสสะอาด</Link>
                                </li>
                                <li>
                                    <Link to="/no-corruption" onClick={() => dispatch(toggleSidebar())}>ศูนย์ปฏิบัติการต่อต้านการทุจริต</Link>
                                </li>
                                <li>
                                    <a href="#">คลังความรู้</a>
                                    <ul>
                                        <li>
                                            <a href="https://mhc9dmh.com/show.aspx?x=KM" target="_blank" onClick={() => dispatch(toggleSidebar())}>
                                                คลังความรู้ MHC9
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.dmh-elibrary.org/" target="_blank" onClick={() => dispatch(toggleSidebar())}>
                                                คลังความรู้ กรมสุขภาพจิต
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.thaidmh-elibrary.org/" target="_blank" onClick={() => dispatch(toggleSidebar())}>
                                                ห้องสมุด กรมสุขภาพจิต (DMH e-Library)
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">สื่อสุขภาพจิต</a>
                                    <ul>
                                        <li>
                                            <Link to="/articles/list" onClick={() => dispatch(toggleSidebar())}>บทความสุขภาพจิต</Link>
                                        </li>
                                        <li>
                                            <Link to="/videos/list" onClick={() => dispatch(toggleSidebar())}>วีดิโอสุขภาพจิต</Link>
                                        </li>
                                        <li>
                                            <Link to="/" onClick={() => dispatch(toggleSidebar())}>อินโฟกราฟฟิก</Link>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="https://secret.dmh.go.th/main" target="_blank" onClick={() => dispatch(toggleSidebar())}>แจ้งเรื่องร้องเรียน</a>
                                </li>
                                <li>
                                    <a href="https://mhc9dmh.com/Query.aspx" target="_blank" onClick={() => dispatch(toggleSidebar())}>กระดานถาม-ตอบ</a>
                                </li>
                                <li>
                                    <a href="" onClick={() => dispatch(toggleSidebar())}>คำถามที่ถามบ่อย (FAQ)</a>
                                </li>
                                <li>
                                    <Link to="e-services" onClick={() => dispatch(toggleSidebar())}>ระบบสารสนเทศ (E-Service)</Link>
                                </li>
                                <li>
                                    <Link to="/downloads" target="_self" onClick={() => dispatch(toggleSidebar())}>ดาวน์โหลดเอกสาร</Link>
                                </li>
                                <li>
                                    <a href="" onClick={() => dispatch(toggleSidebar())}>บริการอื่นๆ</a>
                                </li>
                            </ul>
                        </li>
                        <li className="has-sub">
                            <a href=""><i className="fas fa-bullhorn"></i> ข่าวประชาสัมพันธ์</a>
                            <ul>
                                <li><Link to="/posts/list" onClick={() => dispatch(toggleSidebar())}>ข่าวกิจกรรม</Link></li>
                                <li className="has-sub">
                                    <Link to="/news/3/list" target="_self" onClick={() => dispatch(toggleSidebar())}>ข่าวจัดซื้อจัดจ้าง</Link>
                                    <ul>
                                        <li>
                                            <Link to="/news/1/list" onClick={() => dispatch(toggleSidebar())}>แผนการจัดซื้อจัดจ้าง</Link>
                                        </li>
                                        <li>
                                            <Link to="/news/1/list" onClick={() => dispatch(toggleSidebar())}>ประกาศราคากลาง</Link>
                                        </li>
                                        <li>
                                            <Link to="/news/1/list" onClick={() => dispatch(toggleSidebar())}>ประกาศร่าง TOR</Link>
                                        </li>
                                        <li>
                                            <Link to="/news/1/list" onClick={() => dispatch(toggleSidebar())}>ประกาศจัดซื้อจัดจ้าง</Link>
                                        </li>
                                        <li>
                                            <Link to="/news/1/list" onClick={() => dispatch(toggleSidebar())}>ประกาศผู้ชนะการเสนอราคา</Link>
                                        </li>
                                    </ul>    
                                </li>
                                <li>
                                    <Link to="/news/4/list" onClick={() => dispatch(toggleSidebar())}>ข่าวรับสมัครงาน</Link>
                                </li>
                                <li>
                                    <Link to="/news/5/list" onClick={() => dispatch(toggleSidebar())}>ข่าวประกาศ</Link>
                                </li>
                                <li>
                                    <Link to="/onepages/list" onClick={() => dispatch(toggleSidebar())}>MHC9 News</Link>
                                </li>
                                <li>
                                    <Link to="/calendar" onClick={() => dispatch(toggleSidebar())}>ปฏิทินกิจกรรม</Link>
                                </li>
                            </ul>
                        </li>
                        <li className="has-sub">
                            <a href=""><i className="far fa-address-book"></i> ติดต่อเรา</a>
                            <ul>
                                <li>
                                    <Link to="/contact" onClick={() => dispatch(toggleSidebar())}>ติดต่อเรา</Link>
                                </li>
                                <li>
                                    <Link to="/links" onClick={() => dispatch(toggleSidebar())}>ลิงค์ที่เกี่ยวข้อง</Link>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    )
}

export default Sidebar