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
                <Link to="/posts/87">
                    <div className="policy">
                        <h3>การเปิดโอกาสให้เกิดการมีส่วนร่วม</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
                <Link to="/posts/85">
                    <div className="policy">
                        <h3>การประเมินความเสี่ยงการทุจริตประจำปี</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
                <Link to="/posts/86">
                    <div className="policy">
                        <h3>การดำเนินการเพื่อจัดการความเสี่ยงการทุจริต</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
                <Link to="/posts/">
                    <div className="policy">
                        <h3>กิจกรรมส่งเสริมวัฒนธรรมองค์กร</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
                <Link to="/posts/">
                    <div className="policy">
                        <h3>แผนปฏิบัติการป้องกันการทุจริตประจำปี</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
                <Link to="/posts/84">
                    <div className="policy">
                        <h3>รายงานการกำกับติดตามการดำเนินการป้องกันการทุจริต</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
                <Link to="/posts/83">
                    <div className="policy">
                        <h3>รายงานผลการดำเนินการป้องกันการทุจริตประจำปี</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
                <Link to="/posts/82">
                    <div className="policy">
                        <h3>รายงานผลการวิเคราะห์แบบสำรวจความคิดเห็นด้านคุณธรรมและความโปร่งใสประจำปี</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
            </div>
        </section>
    )
}

export default Appeal