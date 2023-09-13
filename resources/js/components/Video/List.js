import React from 'react'

const videos = [
    { id: 1, title: '3 รู้...อยู่...รอด อำเภอเนินสง่า จังหวัดชัยภูมิ', description: '', url: 'https://www.youtube.com/embed/b5YsSxrnZb8' },
    { id: 2, title: 'สูงวัยพลังใจสร้างได้', description: '', url: 'https://www.youtube.com/embed/OQo3keOSJyU' },
    { id: 3, title: 'การยอมรับ และลดการตีตราผู้เดินทางมาจากพื้นที่เสี่ยง', description: '', url: 'https://www.youtube.com/embed/HyHoerr8lOo' },
    { id: 4, title: 'การเสริมสร้างวัคซีนครอบครัว', description: '', url: 'https://www.youtube.com/embed/yaiXrUk28PM' },
];

const VideoList = () => {
    return (
        <section className="video__list-container container">
            <h1 className="title">วีดิโอสุขภาพจิต</h1>

            <hr className="my-2" />

            <div className="video__list-wrapper">
                <div className="row">
                    {videos.map((video, index) => (
                        <div className="col-md-12 col-lg-6" key={video.id}>
                            <div className="video-item">
                                <iframe
                                    width="100%"
                                    height="100%"
                                    src={video.url}
                                    title={video.title}
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowFullScreen
                                ></iframe>
                            </div>
                        </div>
                    ))}
                </div>
                <nav aria-label="navigation" className="c9__pagination">
                    <ul>
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
    )
}

export default VideoList