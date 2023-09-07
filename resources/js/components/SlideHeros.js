import React from 'react'
import SwiperCore  from 'swiper'
import { Swiper, SwiperSlide } from 'swiper/react'
import { Autoplay, Navigation, Pagination } from 'swiper/modules'
/** Import Swiper styles */
import 'swiper/swiper-bundle.css'

const slides = [
    { id: 1, title: 'Slide 1', imgUrl: 'https://dmh.go.th/images/slides/NoGift.jpg' },
    { id: 2, title: 'Slide 2', imgUrl: './img/thumbnail_1c30ffd49c597aa9cd42af147a04514b.png' },
    { id: 3, title: 'Slide 3', imgUrl: './img/thumbnail_c550f9c85b119149e89b2ada124649b8.png' },
    { id: 4, title: 'Slide 4', imgUrl: 'https://dmh.go.th/images/slides/NoGift1.jpg' },
];

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
                    delay: 2000
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
            <picture>
                <img
                    src={slide.imgUrl}
                    style={{ width: '100%', height: '100%' }}
                    alt="image"
                />
            </picture>
            <div className="slide-text">
                <h1>{slide.title}</h1>
            </div>
        </div>
    )
}

export default SlideHeros