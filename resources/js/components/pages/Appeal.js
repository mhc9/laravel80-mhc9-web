import React from 'react'
import { Link } from 'react-router-dom'

function Appeal() {
    return (
        <section className="policies container">
            <h1 className="title">ศูนย์ราชการใสสะอาด</h1>

            <hr className="my-2" />

            <div className="policies-wrapper">
                <Link to="/posts/64">
                    <div className="policy">
                        <h3>แนวทางจัดการข้อร้องเรียน</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
                <Link to="/posts/43">
                    <div className="policy">
                        <h3>ช่องทางการร้องเรียน</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
                <a href="#">
                    <div className="policy">
                        <h3>สรุปรายการเรื่องร้องเรียน</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="#">
                    <div className="policy">
                        <h3>แผนปฏิบัติการป้องกันการทุจริตประจำปี</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="#">
                    <div className="policy">
                        <h3>รายงานการกำกับติดตามการดำเนินการป้องกันการทุจริต</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="#">
                    <div className="policy">
                        <h3>รายงานผลการดำเนินการป้องกันการทุจริตประจำปี</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </a>
            </div>
        </section>
    )
}

export default Appeal