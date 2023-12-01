import React from 'react'
import SlideHeros from '../SlideHeros'
import OptionMenu from '../OptionMenu'
import SlideLogos from '../SlideLogos'
import Director from '../Director'
import OfficerService from '../OfficerService'
import PostHeadline from './Post/Headline'
import VideoFeed from './Video/Feed'
import NewsFeed from './News/Feed'
import ArticleFeed from './Article/Feed'
import OnepageFeed from './Onepage/Feed'
import EService from './EService'

const Home = () => {
    return (
        <>
            <SlideHeros />

            <OptionMenu />

            <section className="home">
                <div className="home-contents">
                    <div>
                        <div className="container">
                            <div className="row">
                                <div className="col-md-12 col-lg-9">
                                    <PostHeadline />
                                </div>
                                <div className="col-md-12 col-lg-3">
                                    <Director />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style={{ background: '#F2F2F2' }}>
                        <div className="container">
                            <div className="row">
                                <div className="col-md-8 col-lg-9">
                                    <VideoFeed />
                                </div>
                                <div className="col-md-4 col-lg-3" style={{ background: '#ffffff' }}>
                                    <OfficerService />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style={{ background: '#f3e2a9' }}>
                        <div className="container">
                            <div className="row">
                                <div className="col">
                                    <NewsFeed />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style={{ background: '#F2F2F2' }}>
                        <div className="container">
                            <div className="row">
                                <div className="col">
                                    <OnepageFeed />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div className="container">
                            <div className="row">
                                <div className="col">
                                    <ArticleFeed />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style={{ background: '#F2F2F2' }}>
                        <div className="container">
                            <div className="row">
                                <div className="col">
                                    <EService />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <SlideLogos />
        </>
    )
}

export default Home