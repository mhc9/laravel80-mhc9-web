import React from 'react'
import SwiperCore  from 'swiper'
import { Swiper, SwiperSlide } from 'swiper/react'
import { Autoplay, FreeMode } from 'swiper/modules'
/** Import Swiper styles */
import 'swiper/swiper-bundle.css'
import logos from '../data/logos.json'

const SlideLogos = () => {
    SwiperCore.use([Autoplay]);

    return (
        <div className="slide-logos">
            <Swiper
                modules={[FreeMode]}
                slidesPerView={4}
                spaceBetween={30}
                freeMode={true}
                autoplay={{
                    delay: 2000
                }}
            >
                {logos.map(slide => (
                    <SwiperSlide key={slide.id}>
                        <div className="slide-logo">
                            <img src={slide.imgUrl} alt="logo-pic" />
                        </div>
                    </SwiperSlide>
                ))}
            </Swiper>
        </div>
    )
}

export default SlideLogos