import React, { useEffect, useState } from 'react'
import { useParams } from 'react-router-dom'
import api from '../../api'

const newsTypes = [
    { id: 1, name: "ข่าวจัดซื้อจัดจ้าง" },
    { id: 2, name: "ข่าวรับสมัครงาน" },
    { id: 3, name: "ประกาศ" },
];

const NewsList = () => {
    const { type } = useParams();
    const [procurements, setProcurements] = useState([]); // 3 ข่าวจัดซื้อจัดจ้าง
    const [recruitments, setRecruitments] = useState([]); // 4 ข่าวรับสมัครงาน
    const [notices, setNotices] = useState([]); // 5 ประกาศ
    const [pager, setPager] = useState(null);
    const [endpoint, setEndpoint] = useState('');

    useEffect(() => {
        if (endpoint === '') {
            getNews('/api/posts?page=', 3);
            getNews('/api/posts?page=', 4);
            getNews('/api/posts?page=', 5);
        } else {
            getNews(`${endpoint}`, 3);
            getNews(`${endpoint}`, 4);
            getNews(`${endpoint}`, 5);
        }
    }, [endpoint]);

    const getNews = async (url, category) => {
        const res = await api.get(`${url}&cate=${category}&limit=5`);
        const { data, ..._pager } = res.data;

        if (category === 3) {
            setProcurements(data);
        } else if (category === 4) {
            setRecruitments(data);
        } else {
            setNotices(data);
        }

        setPager(_pager);
    };

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