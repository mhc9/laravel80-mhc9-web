import React from 'react'
import articles from '../../data/articles.json'
import ArticleCard from './ArticleCard'

const ArticleList = () => {
    return (
        <section className="article__list-container container">
            <h1 className="title">บทความสุขภาพจิต</h1>

            <hr className="my-2" />

            <div className="article__list-wrapper">
                <div className="row">
                    {articles.map((article, index) => (
                        <ArticleCard article={article} key={article?.id} />
                    ))}
                </div>
                <nav aria-label="navigation" className="c9__pagination">
                    <ul>
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
    )
}

export default ArticleList