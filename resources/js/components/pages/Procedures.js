import React from 'react'
import { Link } from 'react-router-dom'

const Procedures = () => {
    return (
        <section className="policies container">
            <h1 className="title">มาตรฐานการปฏิบัติงาน</h1>

            <hr className="my-2" />

            <div className="policies-wrapper">
                <Link to="/news/62">
                    <div className="policy">
                        <h3>แนวทางการบริหารผลการปฏิบัติงาน</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
                <Link to="/news/68">
                    <div className="policy">
                        <h3>คู่มือการลา</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
                <Link to="/news/63">
                    <div className="policy">
                        <h3>คู่มือการยืมใช้ทรัพย์สิน</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
                <Link to="/news/64">
                    <div className="policy">
                        <h3>แนวทางการจัดการเรื่องทุจริต</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
                <Link to="/news/66">
                    <div className="policy">
                        <h3>ขั้นตอนการจัดซื้อวัสดุ</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
                <Link to="/news/65">
                    <div className="policy">
                        <h3>ขั้นตอนการยืมเงินราชการ</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
                <Link to="/news/69">
                    <div className="policy">
                        <h3>คู่มือโปรแกรมเดินทางไปราชการ</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
                <Link to="/news/67">
                    <div className="policy">
                        <h3>คู่มือการใช้งานระบบเครือข่ายไร้สาย</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
                <Link to="/news/70">
                    <div className="policy">
                        <h3>คู่มือการบำรุงรักษาเครื่องคอมพิวเตอร์</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
            </div>
        </section>
    )
}

export default Procedures