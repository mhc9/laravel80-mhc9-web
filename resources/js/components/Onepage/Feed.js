import React, { useEffect, useState } from 'react'
import { Link } from 'react-router-dom'
import SwiperCore  from 'swiper'
import { Swiper, SwiperSlide } from 'swiper/react'
import { Autoplay, Pagination, FreeMode } from 'swiper/modules'
import api from '../../api'
/** Import Swiper styles */
import 'swiper/swiper-bundle.css'

SwiperCore.use([Autoplay]);

const OnepageFeed = () => {
    const [onepages, setOnepages] = useState([]);

    useEffect(() => {
        getOnepages();

        return () => getOnepages();
    }, []);

    const getOnepages = async () => {
        const res = await api.get('/api/posts?page=&cate=8&limit=6');
        const { data, ...pager } = res.data;

        setOnepages(data);
    };

    return (
        <div className="info-box">
            <h1 className="title">Press News</h1>

            <hr className="my-2" />

            <div className="row">
                <Swiper
                    modules={[Pagination]}
                    slidesPerView={4}
                    spaceBetween={30}
                    pagination={{ clickable: true }}
                    autoplay={{
                        delay: 5000
                    }}
                >
                    {onepages.map(slide => (
                        <SwiperSlide key={slide.id}>
                            <div className="col-md-3 info-item">
                                <div className="info-img">
                                    <img src={`./${slide?.guid}`} alt="info-pic" />
                                </div>
                            </div>
                        </SwiperSlide>
                    ))}
                </Swiper>
            </div>

            <div style={{ textAlign: 'center', margin: '1rem 0' }}>
                <Link to="/onepages/list" className="all-news">ดูทั้งหมด</Link>
            </div>
        </div>
    )
}

export default OnepageFeed
