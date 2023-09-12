import React from 'react'

const PostList = () => {
    return (
        <section className="post__list-container container">
            <h1 className="title">ข่าวประชาสัมพันธ์</h1>

            <hr className="my-2" />

            <div className="post__list-wrapper">
                <div className="row">
                    {[1,2,3,4,5,6,7,8,9,10].map((item, index) => (
                        <div className="col-md-12 post__list-item" key={index}>
                            <div className="post__list-img">
                                <img src="./img/post-02.jpg" alt="" />
                            </div>
                            <div className="post__list-text">
                                <h4>สุดปัง! คว้ารางวัลคุณภาพบริหารจัดการภาครัฐดีเด่น</h4>
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
                    ))}
                </div>
                <nav aria-label="Page navigation">
                    <ul>
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
    )
}

export default PostList