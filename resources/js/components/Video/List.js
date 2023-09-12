import React from 'react'

const videos = [
    { id: 1, title: '3 รู้...อยู่...รอด อำเภอเนินสง่า จังหวัดชัยภูมิ', description: '', url: 'https://www.youtube.com/embed/b5YsSxrnZb8' },
    { id: 2, title: 'สูงวัยพลังใจสร้างได้', description: '', url: 'https://www.youtube.com/embed/OQo3keOSJyU' },
    { id: 3, title: 'การยอมรับ และลดการตีตราผู้เดินทางมาจากพื้นที่เสี่ยง', description: '', url: 'https://www.youtube.com/embed/HyHoerr8lOo' },
    { id: 4, title: 'การเสริมสร้างวัคซีนครอบครัว', description: '', url: 'https://www.youtube.com/embed/yaiXrUk28PM' },
];

const VideoList = () => {
    return (
        <div className="video-box">
            <h1 className="title">วีดิโอสุขภาพจิต</h1>

            <hr className="my-2" />

            <div className="row video-list">
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
            <div className="video-btn">
                <a href="#" className="all-news">วีดิโอทั้งหมด <i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
    )
}

export default VideoList