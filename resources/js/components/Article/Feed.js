import React from 'react'
import { Link } from 'react-router-dom'
import articles from '../../data/articles.json'
import ArticleCard from './ArticleCard'

const ArticleFeed = () => {
    return (
        <div className="article-box">
            <h1 className="title">บทความสุขภาพจิต</h1>

            <hr className="my-2" />

            <div className="row article-list">
                {articles.map((article, index) => (
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