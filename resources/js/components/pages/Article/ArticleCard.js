import React from 'react'
import { Link } from 'react-router-dom'
import PageSubtitle from '../../PageSubtitle'

const ArticleCard = ({ article }) => {
    return (
        <div className="col-sm-6 col-md-4 col-lg-3 ">
            <div className="card article-item">
                <div className="card-img-top">
                    <img src={`./${article?.featured}`} alt="..." />
                </div>
                <div className="card-body">
                    <Link to={`/posts/${article?.id}`}><h3 className="card-title">{article?.title}</h3></Link>

                    <PageSubtitle post={article} />

                    <p className="card-text">
                        <span>{article?.intro_text}</span>
                        {/* <span dangerouslySetInnerHTML={{ __html: article?.full_text }}></span> */}
                    </p>
                </div>
            </div>
        </div>
    )
}

export default ArticleCard