import React from 'react'

const NewsList = () => {
    return (
        <div className="news-box">
            <h1 className="title">ข่าวศูนย์สุขภาพจิตที่ 9</h1>

            <hr className="my-2" />

            <div className="row">
                <div className="col news-list">
                    <h4>ข่าวจัดซื้อจัดจ้าง</h4>
                    <div>
                        <ul>
                            {[1,2,3,4,5].map((item, index) => (
                                <li key={index}>
                                    <div><img src="./img/logo_dmh.png" alt="logo-pic" /></div>
                                    <p>
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        <span className="readmore"><a href="">อ่านเพิ่มเติม</a></span>
                                    </p>
                                </li>
                            ))}
                        </ul>
                    </div>
                    <a href="#" className="all-news">ข่าวทั้งหมด <i class="fas fa-angle-double-right"></i></a>
                </div>
                <div className="col news-list">
                    <h4>ข่าวรับสมัครงาน</h4>
                    <div>
                        <ul>
                            {[1,2,3,4,5].map((item, index) => (
                                <li key={index}>
                                    <div><img src="./img/logo_dmh.png" alt="logo-pic" /></div>
                                    <p>
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        <span className="readmore"><a href="">อ่านเพิ่มเติม</a></span>
                                    </p>
                                </li>
                            ))}
                        </ul>
                    </div>
                    <a href="#" className="all-news">ข่าวทั้งหมด <i class="fas fa-angle-double-right"></i></a>
                </div>
                <div className="col news-list">
                    <h4>ข่าวกิจกรรม</h4>
                    <div>
                        <ul>
                            {[1,2,3,4,5].map((item, index) => (
                                <li key={index}>
                                    <div><img src="./img/logo_dmh.png" alt="logo-pic" /></div>
                                    <p>
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        <span className="readmore"><a href="">อ่านเพิ่มเติม</a></span>
                                    </p>
                                </li>
                            ))}
                        </ul>
                    </div>
                    <a href="#" className="all-news">ข่าวทั้งหมด <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    )
}

export default NewsList