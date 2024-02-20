import React from 'react'
import { Link } from 'react-router-dom'

const EReport = () => {
    return (
        <section className="policies container">
            <h1 className="title">E-Report</h1>

            <hr className="my-2" />

            <div className="policies-wrapper">
                <Link to="/posts/64">
                    <div className="policy">
                        <h3>ขอมูลเชิงสถิติการให้บริการ</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
                <Link to="/sat-servey">
                    <div className="policy">
                        <h3>รายงานผลสำรวจความพึงพอใจ</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
            </div>
        </section>
    )
}

export default EReport