import React, { useEffect, useState } from 'react'
import { useParams } from 'react-router-dom'
import api from '../../../api'

const OnepageDetail = () => {
    const { id } = useParams();
    const [news, setNews] = useState(null);

    useEffect(() => {
        if (id) {
            getPost(id);
        }
    }, [id]);

    const getPost = async (id) => {
        const res = await api.get(`/api/posts/${id}`);

        setNews(res.data);
    };

    return (
        <section className="about container">
            <h1 className="title">{news?.title}</h1>

            <hr className="my-2" />

            <div className="px-2">
                <div className="text-muted text-xs font-thin flex justify-between items-center mb-2 px-2">
                    <span><i className="fas fa-calendar-alt"></i> {news?.publish_up} น.</span>
                    <span><i className="fas fa-user-alt"></i> {news?.author?.name}</span>
                </div>

                <div className="p-2 mt-4 flex justify-center">
                    <div className="w-3/5 rounded-md overflow-hidden mb-4">
                        <img src={`./${news?.featured}`} alt="info-pic" />
                    </div>
                </div>
            </div>
        </section>
    )
}

export default OnepageDetail