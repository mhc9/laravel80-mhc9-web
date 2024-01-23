import React from 'react'
import { Link } from 'react-router-dom'

function AnnualReports() {
    return (
        <section className="policies container">
            <h1 className="title">รายงานประจำปี</h1>

            <hr className="my-2" />

            <div className="policies-wrapper">
                <Link to="/news/44">
                    <div className="policy">
                        <h3>รายงานประจำปี 2566</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
                <Link to="/news/45">
                    <div className="policy">
                        <h3>รายงานประจำปี 2565</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
            </div>
        </section>
    )
}

export default AnnualReports