import React from 'react'

const ArticleList = () => {
    return (
        <section className="article__list-container container">
            <h1 className="title">บทความสุขภาพจิต</h1>

            <hr className="my-2" />

            <div className="article__list-wrapper">
                <div className="row">
                    {[1,2,3,4,5,6,7,8].map((article, index) => (
                        <div className="col-sm-6 col-md-4 col-lg-3 " key={index}>
                            <div className="card article-item">
                                <img src="https://www.dga.or.th/wp-content/uploads/2020/10/img_feaae76f469b44c092c58f5ff55202b3.jpg" className="card-img-top" alt="..." />
                                <div className="card-body">
                                    <h3 className="card-title">บทความ {index + 1}</h3>
                                    <h5 className="text-muted">
                                        <span><i class="fas fa-calendar-alt"></i> 2023-09-09 16:00 น.</span>
                                        <span><i class="fas fa-user-alt"></i> Admin</span>
                                    </h5>
                                    <p className="card-text">
                                        Some quick example text to build on the card title and make up the bulk of the card's content.
                                        <span className="readmore"><a href="">อ่านเพิ่มเติม</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    ))}
                </div>
                <nav aria-label="navigation" className="c9__pagination">
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

export default ArticleList