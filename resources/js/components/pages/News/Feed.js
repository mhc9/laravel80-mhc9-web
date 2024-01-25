import React, { useEffect, useState } from 'react'
import { Link } from 'react-router-dom'
import api from '../../../api'

const NewsFeed = () => {
    const [procurements, setProcurements] = useState([]); // 3 ข่าวจัดซื้อจัดจ้าง
    const [recruitments, setRecruitments] = useState([]); // 4 ข่าวรับสมัครงาน
    const [notices, setNotices] = useState([]); // 5 ประกาศ

    useEffect(() => {
            getNews('/api/posts?page=', 3);
            getNews('/api/posts?page=', 4);
            getNews('/api/posts?page=', 5);
    }, []);

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
    };

    return (
        <div className="news-box">
            <h1 className="title">
                ข่าวประชาสัมพันธ์ <i className="fas fa-angle-right"></i>อื่นๆ
            </h1>

            <hr className="my-2" />

            <div className="row">
                <div className="col-lg-4 col-md-12 news-wrapper">
                    <h4>ข่าวจัดซื้อจัดจ้าง</h4>
                    <div className="news-list">
                        <ul>
                            {procurements.map((item, index) => (
                                <li key={index}>
                                    <div><img src="./img/logo_dmh.png" alt="logo-pic" /></div>
                                    <p>
                                        <Link to={`/posts/${item.id}`}>{item.title}</Link>
                                    </p>
                                </li>
                            ))}
                        </ul>
                    </div>

                    <Link to={`/news/3/list`} className="all-news">ข่าวทั้งหมด</Link>
                </div>
                <div className="col-lg-4 col-md-12 news-wrapper">
                    <h4>ข่าวรับสมัครงาน</h4>
                    <div className="news-list">
                        <ul>
                            {recruitments.map((item, index) => (
                                <li key={index}>
                                    <div><img src="./img/logo_dmh.png" alt="logo-pic" /></div>
                                    <p>
                                        <Link to={`/posts/${item.id}`}>{item.title}</Link>
                                    </p>
                                </li>
                            ))}
                        </ul>
                    </div>

                    <Link to={`/news/4/list`} className="all-news">ข่าวทั้งหมด</Link>
                </div>
                <div className="col-lg-4 col-md-12 news-wrapper">
                    <h4>ประกาศ</h4>
                    <div className="news-list">
                        <ul>
                            {notices.map((item, index) => (
                                <li key={index}>
                                    <div><img src="./img/logo_dmh.png" alt="logo-pic" /></div>
                                    <p>
                                        <Link to={`/posts/${item.id}`}>{item.title}</Link>
                                    </p>
                                </li>
                            ))}
                        </ul>
                    </div>

                    <Link to={`/news/5/list`} className="all-news">ประกาศทั้งหมด</Link>
                </div>
            </div>
        </div>
    )
}

export default NewsFeed