import React from 'react'
import SwiperCore  from 'swiper'
import { Swiper, SwiperSlide } from 'swiper/react'
import { Autoplay, FreeMode } from 'swiper/modules'
/** Import Swiper styles */
import 'swiper/swiper-bundle.css'

const slides = [
    { id: 1, imgUrl: 'https://upload.wikimedia.org/wikipedia/commons/f/f9/%E0%B8%95%E0%B8%A3%E0%B8%B2%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%97%E0%B8%A3%E0%B8%A7%E0%B8%87%E0%B8%AA%E0%B8%B2%E0%B8%98%E0%B8%B2%E0%B8%A3%E0%B8%93%E0%B8%AA%E0%B8%B8%E0%B8%82%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88.png' },
    { id: 2, imgUrl: 'https://upload.wikimedia.org/wikipedia/th/7/7c/Logo-thaihealth_Thai_with_Text.png' },
    { id: 3, imgUrl: 'https://heretohealproject.com/wp-content/uploads/2022/10/147.-%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%9E%E0%B8%A2%E0%B8%B2%E0%B8%9A%E0%B8%B2%E0%B8%A5%E0%B8%88%E0%B8%B4%E0%B8%95%E0%B9%80%E0%B8%A7%E0%B8%8A%E0%B8%99%E0%B8%84%E0%B8%A3%E0%B8%A3%E0%B8%B2%E0%B8%8A%E0%B8%AA%E0%B8%B5%E0%B8%A1%E0%B8%B2%E0%B8%A3%E0%B8%B2%E0%B8%8A%E0%B8%99%E0%B8%84%E0%B8%A3%E0%B8%B4%E0%B8%99%E0%B8%97%E0%B8%A3%E0%B9%8C.jpg' },
    { id: 4, imgUrl: 'https://www2.nakhonratchasima.go.th/images/content/logo-102-1/pic.png' },
    { id: 5, imgUrl: 'https://www.jobbkk.com/upload/variety/goverment/20160401_3104.png' },
    { id: 6, imgUrl: 'https://upload.wikimedia.org/wikipedia/th/thumb/c/ca/Opdc.JPG/1200px-Opdc.JPG' },
];

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
                {slides.map(slide => (
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