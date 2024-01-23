import React, { useEffect, useState } from 'react'
import { Link } from 'react-router-dom';
import { useDispatch, useSelector } from 'react-redux';
import { getPosts } from '../../../features/postSlice';
import Pagination from '../../Pagination';
import Spinner from '../../Loading/Spinner';

const PostList = () => {
    const dispatch = useDispatch();
    const { posts, pager, isLoading } = useSelector(state => state.post);
    const [endpoint, setEndpoint] = useState('');

    useEffect(() => {
        if (endpoint === '') {
            dispatch(getPosts({ url: '/api/posts?page=&cate=2&limit=5' }));
        } else {
            dispatch(getPosts({ url: `${endpoint}&cate=2&limit=5` }));
        }
    }, [endpoint]);

    return (
        <section className="post__list-container container">
            <h1 className="title">
                ข่าวประชาสัมพันธ์ <i className="fas fa-angle-right"></i>ข่าวกิจกรรม
            </h1>

            <hr className="my-2" />

            <div className="post__list-wrapper">
                <div className="row">
                    {isLoading && <Spinner />}
                    {!isLoading && posts?.map((post, index) => (
                        <div className="col-md-12 post__list-item" key={post.id}>
                            <div className="post__list-img">
                                <img src={`./${post?.featured}`} alt="post-pic" />
                            </div>
                            <div className="post__list-text">
                                <h4><Link to="/">{post.title}</Link></h4>
                                <h5 className="text-muted">
                                    <span><i className="fas fa-calendar-alt"></i> {post.publish_up} น.</span>
                                    <span><i className="fas fa-user-alt"></i> {post.author?.name}</span>
                                </h5>
                                <p>
                                    {post.intro_text}
                                    <span className="readmore"><a href="">อ่านเพิ่มเติม</a></span>
                                </p>
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

export default PostList