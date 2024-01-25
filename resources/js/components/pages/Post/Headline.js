import React, { useEffect, useState } from 'react'
import { Link } from 'react-router-dom'
import api from '../../../api'
import PostSubtitle from '../../PostSubtitle'

const PostHeadline = () => {
    const [headline, setHeadline] = useState(null);
    const [subposts, setSubposts] = useState([]);

    useEffect(() => {
        getPosts();
    }, []);

    const getPosts = async () => {
        const res = await api.get('/api/posts?page=&cate=2&limit=4');
        const { data, ...pager } = res.data;

        /** Get 1st element from array */
        setHeadline(data.find(e => true));

        /** Remove 1st element from array */
        setSubposts(data.filter((post, index) => index > 0));
    };

    return (
        <div className="post-box">
            <h1 className="title">
                ข่าวประชาสัมพันธ์ <i className="fas fa-angle-right"></i>ข่าวกิจกรรม
            </h1>

            <hr className="my-2" />

            <div className="post-list">
                <div className="row">
                    <div className="col-md-12 col-lg-7">
                        <div className="post-headline">
                            <div className="headline-img">
                                <img src={`./${headline?.featured}`} alt="headline-pic" />
                            </div>
                            <div className="headline-text">
                                <h4>{headline?.title}</h4>
                                <PostSubtitle post={headline} />
                                <p>
                                    <span>{headline?.intro_text}</span>
                                    {/* <span dangerouslySetInnerHTML={{ __html: headline?.full_text }}></span> */}
                                    <span className="readmore">
                                        <Link to={`/posts/${headline?.id}`}>อ่านเพิ่มเติม</Link>
                                    </span>
                                </p>
                                {headline?.tags && (
                                    <div className="mb-2">
                                        {headline?.tags.split(',').map((tag, index) => (
                                            <div className="badge rounded-pill bg-secondary me-1" key={index}>{tag}</div>
                                        ))}
                                    </div>
                                )}
                            </div>
                        </div>
                    </div>
                    <div className="col-md-12 col-lg-5">
                        <ul className="post-secondary">
                            {subposts.map((post, index) => (
                                <li key={index}>
                                    <div className="post__secondary-img">
                                        <img src={`./${post?.featured}`} className="lg:h-[100px] max-lg:h-[120px]" alt="post-pic" />
                                    </div>
                                    <div className="post__secondary-text">
                                        <Link to={`/posts/${post?.id}`}><h4>{post.title}</h4></Link>
                                        <PostSubtitle post={post} />
                                        <p>
                                            {post.intro_text}
                                        </p>
                                    </div>
                                </li>
                            ))}
                        </ul>

                        <div className="post-btn mt-2">
                            <Link to="/posts/list" className="all-news">ข่าวทั้งหมด</Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default PostHeadline