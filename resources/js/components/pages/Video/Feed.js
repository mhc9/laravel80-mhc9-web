import React, { useEffect, useState } from 'react'
import { Link } from 'react-router-dom';
import api from '../../../api'

const VideoFeed = () => {
    const [videos, setVideos] = useState([]);

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
        <div className="video-box">
            <h1 className="title">วีดิโอสุขภาพจิต</h1>

            <hr className="my-2" />

            <div className="row video-list">
                {videos.map((video, index) => (
                    <div className="col-md-12 col-lg-6" key={video.id}>
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
            <div className="video-btn">
                <Link to="/videos/list" className="all-news">วีดิโอทั้งหมด</Link>
            </div>
        </div>
    )
}

export default VideoFeed