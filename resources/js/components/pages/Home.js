import React from 'react'
import SlideHeros from '../SlideHeros'
import OptionMenu from '../OptionMenu'
import SlideLogos from '../SlideLogos'

const Home = () => {
    return (
        <>
            <SlideHeros />

            <OptionMenu />

            <section className="home container">
                <h1 className="title">ข่าวประชาสัมพันธ์</h1>

                <hr className="my-2" />

                <div>
                    
                </div>
            </section>

            <SlideLogos />
        </>
    )
}

export default Home