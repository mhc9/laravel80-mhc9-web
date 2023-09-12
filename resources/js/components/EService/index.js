import React from 'react'

const services = [
    { id: 1, name: 'Mental Health Check In', img_url: 'https://checkin.dmh.go.th/assets_ci/images/logo/mental-icon.png', link: 'https://checkin.dmh.go.th/dashboards'},
    { id: 2, name: 'School Health HERO', img_url: 'https://www.kruachieve.com/wp-content/uploads/2021/03/273553748_309389491153678_311550697631263581_n.jpg', link: 'https://schoolhealthhero.obec.go.th/'},
    { id: 3, name: 'Sabai Jai', img_url: 'https://www.matichonacademy.com/wp-content/uploads/2020/11/Sabaijai-2.jpg', link: ''},
    { id: 4, name: 'Data Catalog', img_url: 'https://gdcatalog.go.th/uploads/admin/2023-07-04-064640.259684governmentdataok.png', link: 'https://catalog.dmh.go.th/dataset/?organization=mhc09'},
    { id: 5, name: 'ตอบรับเข้าร่วมโครงการ', img_url: 'https://www.mhc9dmh.com/PIC/par.jpg', link: 'https://www.mhc9dmh.com/ParticipateList.aspx'},
    { id: 6, name: 'Metaverse MHC9', img_url: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLbY5CDP0bln-ued_g4EpN4gIoTW8JWSptNdwdeI1LwHtDb3B9V4Uu2hxRcVHG9htaUtM&usqp=CAU', link: 'https://www.spatial.io/s/suunysukhphaaphcchitthii-9-kaarsngesrimp-ngkanpayhaasukhphaaphcchit-63db7c4ee15d1c23349972fc?share=6678401426426303740&fbclid=IwAR3qiujwiB_Hkbu11_K_VhlSGDXXtToD2jH_3ZWIuoW0et6WydK0Lo1Ne9A'},
    { id: 7, name: 'ข้อมูลสุขภาพจิต MHC9', img_url: 'https://www.mhc9dmh.com/Pic/moph.png', link: ''},
    { id: 8, name: 'E-Report', img_url: 'https://www.mhc9dmh.com/Pic/moph.png', link: ''},
];

const EService = () => {
    return (
        <div className="service-box">
            <h1 className="title">ระบบสารสนเทศ</h1>

            <hr className="my-2" />

            <div className="service-wrapper">
                <div className="row service-list">
                    {services.map((service, index) => (
                        <div className="col-md-3 col-sm-6" key={service.id}>
                            <a href={service.link} target="_blank">
                                <div className="service-item">

                                    <img src={service.img_url} alt={service.name} />
                                    <h4>{service.name}</h4>
                                </div>
                            </a>
                        </div>
                    ))}
                </div>
            </div>
        </div>
    )
}

export default EService