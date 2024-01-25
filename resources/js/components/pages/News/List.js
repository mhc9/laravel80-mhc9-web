import React, { useEffect, useState } from 'react'
import { Link } from 'react-router-dom'
import { useParams } from 'react-router-dom'
import { useDispatch, useSelector } from 'react-redux'
import { getPosts } from '../../../features/postSlice'
import Pagination from '../../Pagination'
import Spinner from '../../Loading/Spinner'

const newsCategories = [
    { id: 3, name: "ข่าวจัดซื้อจัดจ้าง" },
    { id: 4, name: "ข่าวรับสมัครงาน" },
    { id: 5, name: "ประกาศ" },
];

const NewsList = () => {
    const { category } = useParams();
    const dispatch = useDispatch();
    const { posts, pager, isLoading } = useSelector(state => state.post);
    const [endpoint, setEndpoint] = useState('');

    useEffect(() => {
        if (endpoint === '') {
            dispatch(getPosts({ url: `/api/posts?page=&cate=${category}&limit=8` }));
        } else {
            dispatch(getPosts({ url: `${endpoint}&cate=${category}&limit=8` }));
        }
    }, [category, endpoint]);

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
                    {isLoading && <Spinner />}
                    {!isLoading && posts.map((item, index) => (
                        <div className="col-md-12 news__list-item" key={index}>
                            <div className="news__list-img">
                                <img src="./img/logo_dmh.png" alt="logo-pic" />
                            </div>
                            <div className="news__list-text w-full">
                                <p>
                                    {item?.title}
                                    <span className="readmore"><Link to={`/posts/${item.id}`}>อ่านเพิ่มเติม</Link></span>
                                </p>
                                <h5 className="text-muted">
                                    <span><i className="fas fa-calendar-alt"></i> {item?.publish_up}</span>
                                    <span><i className="fas fa-user-alt"></i> {item?.author?.name}</span>
                                </h5>
                            </div>
                        </div>
                    ))}
                </div>

                {pager && (
                    <Pagination
                        pager={pager}
                        onPageClick={(url) => setEndpoint(url)}
                    />
                )}
            </div>
        </section>
    )
}

export default NewsList