import React from 'react'
import { Link } from 'react-router-dom'

const PostHeadline = () => {
    return (
        <div className="post-box">
            <h1 className="title">ข่าวกิจกรรม</h1>

            <hr className="my-2" />

            <div className="post-list">
                <div className="row">
                    <div className="col-md-12 col-lg-7">
                        <div className="post-headline">
                            <div className="headline-img">
                                <img src="./img/post-01.jpg" alt="" />
                            </div>
                            <div className="headline-text">
                                <h4>ผอ.ศูนย์สุขภาพจิตที่ 9 ได้รับรางวัลข้าราชการพลเรือนดีเด่น (ครุฑทองคำ)</h4>
                                <h5 className="text-muted">
                                    <span><i className="fas fa-calendar-alt"></i> 2023-09-09 16:00 น.</span>
                                    <span><i className="fas fa-user-alt"></i> Admin</span>
                                </h5>
                                <p>
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    <span className="readmore"><a href="">อ่านเพิ่มเติม</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-12 col-lg-5">
                        <ul className="post-secondary">
                            {[1,2,3].map((item, index) => (
                                <li key={index}>
                                    <div className="post__secondary-img">
                                        <img src="./img/post-02.jpg" alt="" />
                                    </div>
                                    <div className="post__secondary-text">
                                        <h4>สุดปัง! คว้ารางวัลคุณภาพบริหารจัดการภาครัฐดีเด่น</h4>
                                        <h5 className="text-muted">
                                            <span><i className="fas fa-calendar-alt"></i> 2023-09-09 16:00 น.</span>
                                            <span><i className="fas fa-user-alt"></i> Admin</span>
                                        </h5>
                                        <p>
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                            <span className="readmore"><a href="">อ่านเพิ่มเติม</a></span>
                                        </p>
                                    </div>
                                </li>
                            ))}
                        </ul>
                    </div>
                    <div className="post-btn">
                        <Link to="/posts/list" className="all-news">ข่าวทั้งหมด</Link>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default PostHeadline