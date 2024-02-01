import React from 'react'
import SwiperCore  from 'swiper'
import { Swiper, SwiperSlide } from 'swiper/react'
import { Autoplay, Navigation, Pagination } from 'swiper/modules'
/** Import Swiper styles */
import 'swiper/swiper-bundle.css'
import slides from '../../data/hero-slides.json' 

const SlideHeros = () => {
    SwiperCore.use([Autoplay]);

    return (
        <div className="slide-hero">
            <Swiper
                modules={[Navigation, Pagination]}
                slidesPerView={1}
                navigation
                pagination={{ clickable: true }}
                autoplay={{
                    delay: 3000
                }}
            >
                {slides.map((slide, index) => (
                    <SwiperSlide key={slide.id}>
                        <Slide slide={slide} />
                    </SwiperSlide>
                ))}
            </Swiper>
        </div>
    )
}

const Slide = ({ slide, ...props }) => {
    return (
        <div className="slide-wrapper">
            <img src={slide.imgUrl} alt="image" />
            <div className="slide-text">
                <h1>{slide.title}</h1>
            </div>
        </div>
    )
}

export default SlideHeros