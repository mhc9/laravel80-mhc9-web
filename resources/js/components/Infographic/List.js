import React from 'react'
import SwiperCore  from 'swiper'
import { Swiper, SwiperSlide } from 'swiper/react'
import { Autoplay, Pagination, FreeMode } from 'swiper/modules'
/** Import Swiper styles */
import 'swiper/swiper-bundle.css'

const slides = [
    { id: 1, imgUrl: './img/info-01.jpg' },
    { id: 2, imgUrl: './img/info-01.jpg' },
    { id: 3, imgUrl: './img/info-01.jpg' },
    { id: 4, imgUrl: './img/info-01.jpg' },
    { id: 5, imgUrl: './img/info-01.jpg' },
    { id: 6, imgUrl: './img/info-01.jpg' },
];

const InfographicList = () => {
    SwiperCore.use([Autoplay]);

    return (
        <div className="info-box">
            <h1 className="title">Infographics</h1>

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
                    {slides.map(slide => (
                        <SwiperSlide key={slide.id}>
                            <div className="col-md-3 info-item">
                                <div className="item-img">
                                    <img src={slide.imgUrl} alt="info-pic" />
                                </div>
                            </div>
                        </SwiperSlide>
                    ))}
                </Swiper>
            </div>

            <div style={{ textAlign: 'center', margin: '1rem 0' }}>
                <a href="#" className="all-news">ทั้งหมด <i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
    )
}

export default InfographicList
