import React, { useEffect, useState } from 'react'
import { Link } from 'react-router-dom'
// import { useDispatch, useSelector } from 'react-redux'
import ArticleCard from './ArticleCard'
// import articles from '../../data/articles.json'
import api from '../../api'

const ArticleFeed = () => {
    // const dispatch = useDispatch();
    // const { posts, loading } = useSelector(state => state.post);
    const [articles, setArticles] = useState([]);

    useEffect(() => {
        getArticles();
    }, []);

    const getArticles = async () => {
        const res = await api.get('/api/posts?page=&cate=6&limit=8');
        const { data, ...pager } = res.data;

        setArticles(data);
    };

    return (
        <div className="article-box">
            <h1 className="title">บทความสุขภาพจิต</h1>

            <hr className="my-2" />

            <div className="row article-list">
                {!articles && (
                    <div className="spinner-border" role="status">
                        <span className="sr-only">Loading...</span>
                    </div>
                )}
                {articles?.map((article, index) => (
                    <ArticleCard article={article} key={article?.id} />
                ))}

                <div className="post-btn">
                    <Link to="/articles/list" className="all-news">บทความทั้งหมด</Link>
                </div>
            </div>
        </div>
    )
}

export default ArticleFeed