import React from 'react'
import SlideHeros from '../SlideHeros'
import OptionMenu from '../OptionMenu'
import SlideLogos from '../SlideLogos'
import PostHeadline from '../Post/Headline'
import Director from '../shared/Director'
import VideoList from '../Video/List'
import NewsFeed from '../News/Feed'
import InfographicList from '../Infographic/List'
import ArticleList from '../Article/List'
import EService from '../EService'

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
                                    <VideoList />
                                </div>
                                <div className="col-md-4 col-lg-3" style={{ background: '#ffffff' }}>
                                    <div className="link-box">
                                        <h1 className="title">สำหรับเจ้าหน้าที่</h1>

                                        <hr className="my-2" />

                                        <div className="link-items">
                                            <a href=""><i class="fas fa-coins"></i><h4>โปรแกรม WPM</h4></a>
                                            <a href=""><i class="fas fa-envelope-open-text"></i><h4>ระบบงานสารบรรณอิเล็กทรอนิกส์</h4></a>
                                            <a href=""><i class="fas fa-users"></i><h4>ระบบงานบุคลากร</h4></a>
                                            <a href=""><i class="far fa-credit-card"></i><h4>ระบบ E-Pay slip</h4></a>
                                            <a href=""><i class="fas fa-cogs"></i><h4>ระบบ B&P DMH</h4></a>
                                        </div>
                                    </div>
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
                                    <InfographicList />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div className="container">
                            <div className="row">
                                <div className="col">
                                    <ArticleList />
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