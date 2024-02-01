import React, { useEffect, useState } from 'react'
import { Link } from 'react-router-dom';
import { useDispatch, useSelector } from 'react-redux';
import { getPosts } from '../../../features/postSlice';
import Pagination from '../../shared/Pagination';
import Spinner from '../../Loading/Spinner';

const OnepageList = () => {
    const dispatch = useDispatch();
    const { posts, pager, isLoading } = useSelector(state => state.post);
    const [endpoint, setEndpoint] = useState('');

    useEffect(() => {
        if (endpoint === '') {
            dispatch(getPosts({ url: '/api/posts?page=&cate=8&limit=9' }));
        } else {
            dispatch(getPosts({ url: `${endpoint}&cate=8&limit=9` }));
        }
    }, [endpoint]);

    return (
        <section className="info__list-container container">
            <h1 className="title">
                ข่าวประชาสัมพันธ์ <i className="fas fa-angle-right"></i>MHC9 News
            </h1>

            <hr className="my-2" />

            <div className="info__list-wrapper">
                <div className="row">
                        {isLoading && <Spinner />}
                        {(!isLoading && posts) && posts.map(slide => (
                            <div className="col-md-4" key={slide.id}>
                                <div className="info-item">
                                    <Link to={`/posts/${slide.id}`}>
                                        <div className="info-img">
                                            <img src={`./${slide?.featured}`} alt="info-pic" />
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

export default OnepageList
