import React from 'react'
import { Link } from 'react-router-dom'

function Appeal() {
    return (
        <section className="policies container">
            <h1 className="title">ศูนย์ราชการใสสะอาด</h1>

            <hr className="my-2" />

            <div className="policies-wrapper">
                <Link to="/news/43">
                    <div className="policy">
                        <h3>แนวทางจัดการข้อร้องเรียน</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
                <Link to="/news/43">
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
            </div>
        </section>
    )
}

export default Appeal