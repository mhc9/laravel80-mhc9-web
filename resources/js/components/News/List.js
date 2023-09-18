import React from 'react'
import { useParams } from 'react-router-dom'

const newsTypes = [
    { id: 1, name: "ข่าวจัดซื้อจัดจ้าง" },
    { id: 2, name: "ข่าวรับสมัครงาน" },
    { id: 3, name: "ประกาศ" },
];

const NewsList = () => {
    const { type } = useParams();

    const getNewsType = (type) => {
        return newsTypes.find(nt => nt.id === type);
    }

    return (
        <section className="news__list-container container">
            <h1 className="title">{getNewsType(parseInt(type, 10))?.name}</h1>

            <hr className="my-2" />

            <div className="news__list-wrapper">
                <div className="row">
                    {[1,2,3,4,5,6,7,8].map((item, index) => (
                        <div className="col-md-12 news__list-item" key={index}>
                            <div className="news__list-img">
                                <img src="./img/logo_dmh.png" alt="logo-pic" />
                            </div>
                            <div className="news__list-text">
                                <p>
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    <span className="readmore"><a href="">อ่านเพิ่มเติม</a></span>
                                </p>
                                <h5 className="text-muted">
                                    <span><i className="fas fa-calendar-alt"></i> 2023-09-09 16:00 น.</span>
                                    <span><i className="fas fa-user-alt"></i> Admin</span>
                                </h5>
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

export default NewsList