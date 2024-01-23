import React, { useEffect, useState } from 'react'
import { Link } from 'react-router-dom';
import api from '../../../api'
import Pagination from '../../Pagination'

const VideoList = () => {
    const [videos, setVideos] = useState([]);
    const [pager, setPager] = useState(null);
    const [endpoint, setEndpoint] = useState('');

    useEffect(() => {
        getVideos();

        return () => getVideos();
    }, []);

    const getVideos = async () => {
        const res = await api.get('/api/posts?page=&cate=7&limit=4');
        const { data, ...pager } = res.data;

        setVideos(data);
    };

    return (
        <section className="video__list-container container">
            <h1 className="title">สื่อสุขภาพจิต <i className="fas fa-angle-right"></i>วีดิโอสุขภาพจิต</h1>

            <hr className="my-2" />

            <div className="video__list-wrapper">
                <div className="row">
                    {videos.map((video, index) => (
                        <div className="col-md-6 col-lg-4" key={video.id}>
                            <div className="video-item">
                                <iframe
                                    width="100%"
                                    height="100%"
                                    src={video.urls}
                                    title={video.title}
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowFullScreen
                                ></iframe>
                            </div>
                        </div>
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

export default VideoList