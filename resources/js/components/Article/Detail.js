import React, { useEffect, useState } from 'react'
import { useParams } from 'react-router-dom'
import api from '../../api'

const ArticleDetail = () => {
    const { id } = useParams();
    const [article, setArticle] = useState(null);

    useEffect(() => {
        if (id) {
            getPost(id);
        }
    }, [id]);

    const getPost = async (id) => {
        const res = await api.get(`/api/posts/${id}`);

        setArticle(res.data);
    };

    return (
        <section className="about container">
            <h1 className="title">{article?.title}</h1>

            <hr className="my-2" />

            <div className="px-2">
                <div className="text-muted text-xs font-thin flex justify-between items-center mb-2 px-2">
                    <span><i className="fas fa-calendar-alt"></i> {article?.publish_up} น.</span>
                    <span><i className="fas fa-user-alt"></i> {article?.author?.name}</span>
                </div>

                <div className="p-2 mt-4 flex justify-center">
                    <div className="w-3/5 rounded-md overflow-hidden">
                        <img src={`./${article?.featured}`} alt="headline-pic" />
                    </div>
                </div>

                <div className="p-2 text-lg">
                    <span>{article?.intro_text}</span>
                    {/* <span dangerouslySetInnerHTML={{ __html: article?.full_text }}></span> */}
                </div>

                <div className="flex justify-between items-center pt-2 pb-4">
                    <div className="w-1/2">
                        {article?.tags && (
                            <div className="font-thin">
                                {article?.tags.split(',').map((tag, index) => (
                                    <div className="badge rounded-pill bg-secondary me-1" key={index}>
                                        {tag}
                                    </div>
                                ))}
                            </div>
                        )}
                    </div>
                    <div className="flex flex-row gap-3 text-lg">
                        <i className="far fa-comment"></i>
                        <i className="far fa-thumbs-up"></i>
                        <i className="fas fa-heart"></i>
                        <i className="fas fa-share-square"></i>
                    </div>
                </div>
            </div>
        </section>
    )
}

export default ArticleDetail