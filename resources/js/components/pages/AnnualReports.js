import React from 'react'

function AnnualReports() {
    return (
        <section className="policies container">
            <h1 className="title">รายงานประจำปี</h1>

            <hr className="my-2" />

            <div className="policies-wrapper">
                <a href="#">
                    <div className="policy">
                        <h3>รายงานประจำปี 2566</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="#">
                    <div className="policy">
                        <h3>รายงานประจำปี 2565</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </a>
            </div>
        </section>
    )
}

export default AnnualReports