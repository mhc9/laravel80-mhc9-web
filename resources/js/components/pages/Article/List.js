import React, { useEffect, useState } from 'react'
import api from '../../../api'
import ArticleCard from './ArticleCard'
import Pagination from '../../shared/Pagination'

const ArticleList = () => {
    const [articles, setArticles] = useState([]);
    const [pager, setPager] = useState(null);
    const [endpoint, setEndpoint] = useState('');

    useEffect(() => {
        if (endpoint === '') {
            getArticles('/api/posts?page=&cate=6&limit=5');
        } else {
            getArticles(`${endpoint}&cate=6&limit=5`);
        }
    }, [endpoint]);

    const getArticles = async (url) => {
        const res = await api.get(url);
        const { data, ..._pager } = res.data;

        setArticles(data);
        setPager(_pager);
    };


    return (
        <section className="article__list-container container">
            <h1 className="title">สื่อสุขภาพจิต <i className="fas fa-angle-right"></i>บทความสุขภาพจิต</h1>

            <hr className="my-2" />

            <div className="article__list-wrapper">
                <div className="row">
                    {articles.map((article, index) => (
                        <ArticleCard article={article} key={article?.id} />
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

export default ArticleList