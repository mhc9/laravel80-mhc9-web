import React from 'react'
import { Link } from 'react-router-dom'

const Manuals = () => {
    return (
        <section className="manuals container">
            <h1 className="title">มาตรฐานการให้บริการ</h1>

            <hr className="my-2" />

            <div className="manuals-wrapper">
                <a href="https://www.mhc9dmh.com/DATA/File/1-people_service.pdf" target="_blank">
                    <div className="manual">
                        <h3>1. คู่มือให้บริการถ่ายทอดนวตกรรมและองค์ความรู้ประชาชน</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="https://dmh.go.th/Download/Guide/view.asp?id=831" target="_blank">
                    <div className="manual">
                        <h3>2. คู่มือการร้องเรียนกรมสุขภาพจิต ปี 2563</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <Link to={`/posts/76`} target="_self">
                    <div className="manual">
                        <h3>3. กระบวนงานการรับมือภัยพิบัติในพื้นที่ (MCATT)</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
                <Link to={`/posts/77`} target="_self">
                    <div className="manual">
                        <h3>4. กระบวนงานการวางแผนยุทธศาสตร์การส่งเสริมสุขภาพจิต</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
                <Link to={`/posts/78`} target="_self">
                    <div className="manual">
                        <h3>5. กระบวนงานการถ่ายทอดองค์ความรู้และเทคโนโลยีด้านสุขภาพจิต</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
                <Link to={`/posts/79`} target="_self">
                    <div className="manual">
                        <h3>6. กระบวนงานการนิเทศและติดตามผลการปฏิบัติงาน (ตรวจราชการกรณีปกติ)</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
                <Link to={`/posts/80`} target="_self">
                    <div className="manual">
                        <h3>7. กระบวนงานการเฝ้าระวังปัญหาสุขภาพจิต</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
                <Link to={`/posts/81`} target="_self">
                    <div className="manual">
                        <h3>8. กระบวนงานการวิจัยและพัฒนาองคความรู้ด้านการส่งเสริมสุขภาพจิตและป้องกันปัญหาสุขภาพจิต</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
            </div>
        </section>
    )
}

export default Manuals