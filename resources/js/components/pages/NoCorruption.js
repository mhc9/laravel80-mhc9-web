import React from 'react'

function NoCorruption() {
    return (
        <section className="policies container">
            <h1 className="title">ศูนย์ปฏิบัติการต่อต้านการทุจริต</h1>

            <hr className="my-2" />

            <div className="policies-wrapper">
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

export default NoCorruption