import React from 'react'

const PostList = () => {
    return (
        <div className="post-box">
            <h1 className="title">ข่าวประชาสัมพันธ์</h1>

            <hr className="my-2" />

            <div className="post-list">
                <div className="row">
                    <div className="col-md-7">
                        <div className="post-headline">
                            <div className="headline-img">
                                <img src="https://cdn.pixabay.com/photo/2023/01/24/10/02/woman-7740613_960_720.jpg" alt="" />
                            </div>
                            <div className="headline-text">
                                <h4>สุดปัง! คว้ารางวัลคุณภาพบริหารจัดการภาครัฐดีเด่น</h4>
                                <h5 className="text-muted">
                                    <span><i class="fas fa-calendar-alt"></i> 2023-09-09 16:00 น.</span>
                                    <span><i class="fas fa-user-alt"></i> Admin</span>
                                </h5>
                                <p>
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    <span className="readmore"><a href="">อ่านเพิ่มเติม</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-5">
                        <ul className="post-secondary">
                            {[1,2,3].map((item, index) => (
                                <li>
                                    <div className="post__secondary-img">
                                        <img src="https://cdn.pixabay.com/photo/2023/01/24/10/02/woman-7740613_960_720.jpg" alt="" />
                                    </div>
                                    <div className="post__secondary-text">
                                        <h4>สุดปัง! คว้ารางวัลคุณภาพบริหารจัดการภาครัฐดีเด่น</h4>
                                        <h5 className="text-muted">
                                            <span><i class="fas fa-calendar-alt"></i> 2023-09-09 16:00 น.</span>
                                            <span><i class="fas fa-user-alt"></i> Admin</span>
                                        </h5>
                                        <p>
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                            <span className="readmore"><a href="">อ่านเพิ่มเติม</a></span>
                                        </p>
                                    </div>
                                </li>
                            ))}
                        </ul>
                        <div className="post-btn">
                            <a href="#" className="all-news">ทั้งหมด <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default PostList