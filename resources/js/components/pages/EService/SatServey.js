import React from 'react'
import { Link } from 'react-router-dom'

const SatServey = () => {
    return (
        <section className="policies container">
            <h1 className="title">สรุปผลความพึงพอใจ</h1>

            <hr className="my-2" />

            <div className="policies-wrapper">
                <Link to="/posts/88">
                    <div className="policy">
                        <h3>สรุปผลความพึงพอใจของผู้รับบริการต่อการบริการ (ผู้รับบริการ)</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
                <Link to="/posts/89">
                    <div className="policy">
                        <h3>สรุปผลความพึงพอใจของผู้รับบริการต่อการบริการ (เครือข่าย สธ.)</h3>
                        <span><i className="fas fa-angle-down"></i></span>
                    </div>
                </Link>
            </div>
        </section>
    )
}

export default SatServey