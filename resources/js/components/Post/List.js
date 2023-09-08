import React from 'react'

const PostList = () => {
    return (
        <div className="post-box">
            <h1 className="title">ข่าวประชาสัมพันธ์</h1>

            <hr className="my-2" />

            <div className="post-list">
                <div className="row">
                    <div className="col-md-7 post-headline">
                        <div className="headline-img">
                            <img src="https://cdn.pixabay.com/photo/2023/01/24/10/02/woman-7740613_960_720.jpg" alt="" />
                        </div>
                        <h4>สุดปัง! คว้ารางวัลคุณภาพบริหารจัดการภาครัฐดีเด่น</h4>
                        <p>
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            <span className="readmore"><a href="">อ่านเพิ่มเติม</a></span>
                        </p>
                    </div>
                    <div className="col-md-5">
                        <ul>
                            {[1,2,3].map((item, index) => (
                                <li>
                                    <div className="post__secondary-img">
                                        <img src="https://cdn.pixabay.com/photo/2023/01/24/10/02/woman-7740613_960_720.jpg" alt="" />
                                    </div>
                                    <div className="post__secondary-text">
                                        <h4>สุดปัง! คว้ารางวัลคุณภาพบริหารจัดการภาครัฐดีเด่น</h4>
                                        <p>
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                            <span className="readmore"><a href="">อ่านเพิ่มเติม</a></span>
                                        </p>
                                    </div>
                                </li>
                            ))}
                        </ul>

                        <div style={{ textAlign: 'center', margin: '0' }}>
                            <a href="#" className="all-news">ทั้งหมด <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default PostList