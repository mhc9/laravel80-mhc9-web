import React, { useEffect, useState } from 'react'
import { useParams } from 'react-router-dom'
import api from '../../../api'
import Pagination from '../../Pagination'

const newsCategories = [
    { id: 3, name: "ข่าวจัดซื้อจัดจ้าง" },
    { id: 4, name: "ข่าวรับสมัครงาน" },
    { id: 5, name: "ประกาศ" },
];

const NewsList = () => {
    const { category } = useParams();
    const [news, setNews] = useState([]);
    const [pager, setPager] = useState(null);
    const [endpoint, setEndpoint] = useState('');

    useEffect(() => {
        if (endpoint === '') {
            getNews('/api/posts?page=');
        } else {
            getNews(`${endpoint}`);
        }
    }, [category, endpoint]);

    const getNews = async (url) => {
        const res = await api.get(`${url}&cate=${category}&limit=5`);
        const { data, ..._pager } = res.data;

        setNews(data);
        setPager(_pager);
    };

    const getNewsCategory = (category) => {
        return newsCategories.find(cate => cate.id === category);
    }

    return (
        <section className="news__list-container container">
            <h1 className="title">
                ข่าวประชาสัมพันธ์ <i className="fas fa-angle-right"></i>{getNewsCategory(parseInt(category, 10))?.name}
            </h1>

            <hr className="my-2" />

            <div className="news__list-wrapper">
                <div className="row">
                    {news.map((item, index) => (
                        <div className="col-md-12 news__list-item" key={index}>
                            <div className="news__list-img">
                                <img src="./img/logo_dmh.png" alt="logo-pic" />
                            </div>
                            <div className="news__list-text">
                                <p>
                                {item?.title}
                                    <span className="readmore"><a href="">อ่านเพิ่มเติม</a></span>
                                </p>
                                <h5 className="text-muted">
                                    <span><i className="fas fa-calendar-alt"></i> {item?.publish_up}</span>
                                    <span><i className="fas fa-user-alt"></i> {item?.author?.name}</span>
                                </h5>
                            </div>
                        </div>
                    ))}
                </div>

                <Pagination
                    pager={pager}
                    onPageClick={(url) => setEndpoint(url)}
                />
            </div>
        </section>
    )
}

export default NewsList