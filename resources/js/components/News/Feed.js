import React from 'react'
import { Link } from 'react-router-dom'

const NewsFeed = () => {
    return (
        <div className="news-box">
            <h1 className="title">ข่าวศูนย์สุขภาพจิตที่ 9</h1>

            <hr className="my-2" />

            <div className="row">
                <div className="col-lg-4 col-md-12 news-wrapper">
                    <h4>ข่าวจัดซื้อจัดจ้าง</h4>
                    <div className="news-list">
                        <ul>
                            {[1,2,3,4,5].map((item, index) => (
                                <li key={index}>
                                    <div><img src="./img/logo_dmh.png" alt="logo-pic" /></div>
                                    <p>
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        <span className="readmore ms-1"><a href="">อ่านเพิ่มเติม</a></span>
                                    </p>
                                </li>
                            ))}
                        </ul>
                    </div>
                    <Link to="/news/list" className="all-news">ข่าวทั้งหมด</Link>
                </div>
                <div className="col-lg-4 col-md-12 news-wrapper">
                    <h4>ข่าวรับสมัครงาน</h4>
                    <div className="news-list">
                        <ul>
                            {[1,2,3,4,5].map((item, index) => (
                                <li key={index}>
                                    <div><img src="./img/logo_dmh.png" alt="logo-pic" /></div>
                                    <p>
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        <span className="readmore ms-1"><a href="">อ่านเพิ่มเติม</a></span>
                                    </p>
                                </li>
                            ))}
                        </ul>
                    </div>
                    <Link to="/news/list" className="all-news">ข่าวทั้งหมด</Link>
                </div>
                <div className="col-lg-4 col-md-12 news-wrapper">
                    <h4>ประกาศ</h4>
                    <div className="news-list">
                        <ul>
                            {[1,2,3,4,5].map((item, index) => (
                                <li key={index}>
                                    <div><img src="./img/logo_dmh.png" alt="logo-pic" /></div>
                                    <p>
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        <span className="readmore ms-1"><a href="">อ่านเพิ่มเติม</a></span>
                                    </p>
                                </li>
                            ))}
                        </ul>
                    </div>
                    <Link to="/news/list" className="all-news">ประกาศทั้งหมด</Link>
                </div>
            </div>
        </div>
    )
}

export default NewsFeed