import React from 'react'
import { Link } from 'react-router-dom'

const ArticleCard = ({ article }) => {
    return (
        <div className="col-sm-6 col-md-4 col-lg-3 ">
            <div className="card article-item">
                <div className="card-img-top">
                    <img src={`./${article?.featured}`} alt="..." />
                </div>
                <div className="card-body">
                    <h3 className="card-title">{article?.title}</h3>
                    <h5 className="text-muted">
                        <span><i className="fas fa-calendar-alt"></i> {article?.publish_up} น.</span>
                        <span><i className="fas fa-user-alt"></i> {article?.author?.name}</span>
                    </h5>
                    <p className="card-text">
                        <span>{article?.intro_text}</span>
                        {/* <span dangerouslySetInnerHTML={{ __html: article?.full_text }}></span> */}
                        <span className="readmore">
                            <Link to={`/articles/${article?.id}`}>อ่านเพิ่มเติม</Link>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    )
}

export default ArticleCard