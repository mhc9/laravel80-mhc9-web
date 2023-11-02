import React, { useEffect, useState } from 'react'
import { Link } from 'react-router-dom'

const posts = [
    {
        id: 1,
        title: 'สัปดาห์สุขภาพจิตแห่งชาติ 2566 “Mentalhealth anywhere, Helpers care everyone” เพื่อนแท้มีทุกที่ เพื่อนดีดูแลใจ',
        full_text: 'ศูนย์สุขภาพจิตที่9 ร่วมกับ โรงพยาบาลจิตเวชนครราชสีมาราชนครินทร์ จัดงานกิจกรรมสัปดาห์สุขภาพจิตแห่งชาติ ประจำปี 2566 “Mentalhealth anywhere, Helpers care everyone” เพื่อนแท้มีทุกที่เพื่อนดีดูแลใจ วันที่ 1 - 2 พฤศจิกายน 2566 ณ วาไรตี้ฮอลล์ชั้น 3 เดอะมอลล์โคราช',
        author: { name: 'Admin' },
        images: 'https://www.mhc9dmh.com/data/photo/1136_S__148029462_0.jpg',
        publish_up: '2023-11-01T13:00:00'
    },
    {
        id: 1,
        title: '“วันนวมินทรมหาราช” วันที่ 13 ตุลาคม พ.ศ.2566',
        full_text: 'ศูนย์สุขภาจิตที่ 9 ร่วมน้อมสำนึกพระมหากรุณาธิคุณในพระบาทสมเด็จพระบรมชนกาธิเบศร มหาภูมิพลอดุลยเดชมหาราชบรมนาถบพิตรที่ทรงมีต่อปวงชนชาวไทย',
        author: { name: 'Admin' },
        images: 'https://www.mhc9dmh.com/data/photo/1134_IMG_5040.JPG',
        publish_up: '2023-10-23T16:00:00'
    },
    {
        id: 1,
        title: '“วันปิยะมหาราช”วันที่ 23ตุลาคม พ.ศ.2566',
        full_text: 'ศูนย์สุขภาจิตที่ 9 ร่วมถวายราชสักการะน้อมรำลึกในพระมหากรุณาธิคุณของพระบาทสมเด็จพระจุลจอมเกล้าเจ้าอยู่หัว ที่ทรงมีต่อปวงชนชาวไทยเป็นล้นพ้นอย่างหาที่สุดมิได้ ณ บริเวณหน้าศาลากลางจังหวัดนครราชสีมา',
        author: { name: 'Admin' },
        images: 'https://www.mhc9dmh.com/data/photo/1135_DSC03862.JPG',
        publish_up: '2023-11-01T13:00:00'
    },
    {
        id: 1,
        title: 'ขอแสดงความยินดีอธิบดีกรมสุขภาพจิต',
        full_text: 'ขอแสดงความยินดีกับ นายแพทย์พงศ์เกษม ไข่มุกด์ เนื่องในโอากาสได้รับแต่งตั้งให้ดำรงตำแหน่งอธิบดีกรมสุขภาพจิต',
        author: { name: 'Admin' },
        images: 'https://www.mhc9dmh.com/data/photo/%E0%B8%82%E0%B8%AD%E0%B9%81%E0%B8%AA%E0%B8%94%E0%B8%87%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%A2%E0%B8%B4%E0%B8%99%E0%B8%94%E0%B8%B5%20(8%20x%205%20%E0%B8%8B%E0%B8%A1.)%20(1).jpg',
        publish_up: '2023-10-12T08:00:00'
    }
];

const PostHeadline = () => {
    const [headline, setHeadline] = useState(null);

    useEffect(() => {
        /** Get 1st element from array */
        setHeadline(posts.find(e => true));

        /** Remove 1st element from array */
        posts.shift();
    }, []);

    return (
        <div className="post-box">
            <h1 className="title">ข่าวกิจกรรม</h1>

            <hr className="my-2" />

            <div className="post-list">
                <div className="row">
                    <div className="col-md-12 col-lg-7">
                        <div className="post-headline">
                            <div className="headline-img">
                                <img src={headline?.images} alt="" />
                            </div>
                            <div className="headline-text">
                                <h4>{headline?.title}</h4>
                                <h5 className="text-muted">
                                    <span><i className="fas fa-calendar-alt"></i> {headline?.publish_up} น.</span>
                                    <span><i className="fas fa-user-alt"></i> {headline?.author?.name}</span>
                                </h5>
                                <p>
                                    {headline?.full_text}
                                    <span className="readmore"><a href="">อ่านเพิ่มเติม</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-12 col-lg-5">
                        <ul className="post-secondary">
                            {posts.map((post, index) => (
                                <li key={index}>
                                    <div className="post__secondary-img">
                                        <img src={post.images} alt="" />
                                    </div>
                                    <div className="post__secondary-text">
                                        <h4><Link to="/">{post.title}</Link></h4>
                                        <h5 className="text-muted">
                                            <span><i className="fas fa-calendar-alt"></i> {post.publish_up} น.</span>
                                            <span><i className="fas fa-user-alt"></i> {post.author?.name}</span>
                                        </h5>
                                        <p>
                                            {post.full_text}
                                            <span className="readmore"><a href="">อ่านเพิ่มเติม</a></span>
                                        </p>
                                    </div>
                                </li>
                            ))}
                        </ul>
                    </div>
                    <div className="post-btn">
                        <Link to="/posts/list" className="all-news">ข่าวทั้งหมด</Link>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default PostHeadline