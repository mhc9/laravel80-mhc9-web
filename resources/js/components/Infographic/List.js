import React from 'react'
import { Link } from 'react-router-dom';

const slides = [
    { id: 1, imgUrl: './img/info-01.jpg' },
    { id: 2, imgUrl: './img/info-01.jpg' },
    { id: 3, imgUrl: './img/info-01.jpg' },
    { id: 4, imgUrl: './img/info-01.jpg' },
    { id: 5, imgUrl: './img/info-01.jpg' },
    { id: 6, imgUrl: './img/info-01.jpg' },
    { id: 7, imgUrl: './img/info-01.jpg' },
    { id: 8, imgUrl: './img/info-01.jpg' },
    { id: 9, imgUrl: './img/info-01.jpg' },
];

const InfographicList = () => {
    return (
        <section className="info__list-container container">
            <h1 className="title">อินโฟกราฟฟิก</h1>

            <hr className="my-2" />

            <div className="info__list-wrapper">
                <div className="row">
                        {slides.map(slide => (
                            <div className="col-md-4" key={slide.id}>
                                <div className="info-item">
                                    <Link to="/">
                                        <div className="info-img">
                                            <img src={slide.imgUrl} alt="info-pic" />
                                        </div>
                                        <div className="info-cover"></div>
                                    </Link>
                                    <div className="info-text">
                                        <a href="#"><i className="fas fa-eye"></i><span>20</span></a>
                                        <a href="#"><i className="fas fa-heart"></i><span>15</span></a>
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

export default InfographicList
