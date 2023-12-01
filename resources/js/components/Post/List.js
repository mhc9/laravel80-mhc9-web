import React, { useEffect, useState } from 'react'
import { Link } from 'react-router-dom';
import api from '../../api'
import Pagination from '../Pagination';

const PostList = () => {
    const [posts, setPosts] = useState([]);
    const [pager, setPager] = useState(null);
    const [endpoint, setEndpoint] = useState('');

    useEffect(() => {
        if (endpoint === '') {
            getPosts('/api/posts?page=&cate=2&limit=5');
        } else {
            getPosts(`${endpoint}&cate=2&limit=5`);
        }
    }, [endpoint]);

    const getPosts = async (url) => {
        const res = await api.get(url);
        const { data, ..._pager } = res.data;

        setPosts(data);
        setPager(_pager);
    };

    return (
        <section className="post__list-container container">
            <h1 className="title">ข่าวกิจกรรม</h1>

            <hr className="my-2" />

            <div className="post__list-wrapper">
                <div className="row">
                    {posts && posts.map((post, index) => (
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