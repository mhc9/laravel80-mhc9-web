import React from 'react'

const ArticleCard = ({ article }) => {
    return (
        <div className="col-sm-6 col-md-4 col-lg-3 ">
            <div className="card article-item">
                <div className="card-img-top">
                    <img src={article?.img_url} alt="..." />
                </div>
                <div className="card-body">
                    <h3 className="card-title">{article?.title}</h3>
                    <h5 className="text-muted">
                        <span><i className="fas fa-calendar-alt"></i> {article?.published_at} น.</span>
                        <span><i className="fas fa-user-alt"></i> {article?.author}</span>
                    </h5>
                    <p className="card-text">
                        {article?.description}
                        <span className="readmore"><a href="">อ่านเพิ่มเติม</a></span>
                    </p>
                </div>
            </div>
        </div>
    )
}

export default ArticleCard