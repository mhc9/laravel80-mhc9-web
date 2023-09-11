import React from 'react'

const services = [
    { id: 1, name: 'Mental Health Check In', img_url: 'https://checkin.dmh.go.th/assets_ci/images/logo/mental-icon.png', link: ''},
    { id: 2, name: 'School Health HERO', img_url: 'https://mhc7.dmh.go.th/wp-content/uploads/2022/12/%E0%B8%AA%E0%B9%84%E0%B8%A5%E0%B8%94%E0%B9%8C1.png', link: ''},
    { id: 3, name: 'Sabai Jai', img_url: 'https://www.matichonacademy.com/wp-content/uploads/2020/11/Sabaijai-2.jpg', link: ''},
    { id: 4, name: 'Data Catalog', img_url: 'https://gdcatalog.go.th/uploads/admin/2023-07-04-064640.259684governmentdataok.png', link: ''},
    { id: 5, name: 'Mental Health Check In', img_url: 'https://checkin.dmh.go.th/assets_ci/images/logo/mental-icon.png', link: ''},
    { id: 6, name: 'School Health HERO', img_url: 'https://mhc7.dmh.go.th/wp-content/uploads/2022/12/%E0%B8%AA%E0%B9%84%E0%B8%A5%E0%B8%94%E0%B9%8C1.png', link: ''},
    { id: 7, name: 'Sabai Jai', img_url: 'https://www.matichonacademy.com/wp-content/uploads/2020/11/Sabaijai-2.jpg', link: ''},
    { id: 8, name: 'Data Catalog', img_url: 'https://gdcatalog.go.th/uploads/admin/2023-07-04-064640.259684governmentdataok.png', link: ''},
];

const EService = () => {
    return (
        <div className="service-box">
            <h1 className="title">บริการ E-Service</h1>

            <hr className="my-2" />

            <div className="service-wrapper">
                <div className="row service-list">
                    {services.map((service, index) => (
                        <div className="col-md-3 col-sm-6" key={service.id}>
                            <div className="service-item">
                                <img src={service.img_url} alt={service.name} />
                            </div>
                        </div>
                    ))}
                </div>
            </div>
        </div>
    )
}

export default EService