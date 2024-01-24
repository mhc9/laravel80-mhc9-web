import React from 'react'

const Policies = () => {
    return (
        <section className="policies container">
            <h1 className="title">นโยบายองค์กร</h1>

            <hr className="my-2" />

            <div className="policies-wrapper">
                <a href="#">
                    <div className="policy">
                        <h3>นโยบายการคุ้มครองข้อมูลส่วนบุคคล</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="#">
                    <div className="policy">
                        <h3>นโยบายเว็บไซต์</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </a>
                <a href="#">
                    <div className="policy">
                        <h3>นโยบายการรักษาความมั่นคงปลอดภัยเว็บไซต์</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </a>
            </div>
        </section>
    )
}

export default Policies