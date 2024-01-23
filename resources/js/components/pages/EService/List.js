import React from 'react'
import services from '../../../data/services.json'

const EServiceList = () => {
    return (
        <section className="video__list-container container">
            <h1 className="title">ระบบสารสนเทศ</h1>

            <hr className="my-2" />

            <div className="video__list-wrapper">
                <div className="row text-center">
                    {services.map((service, index) => (
                        <div className="col-md-3 col-sm-6 flex justify-center items-center" key={service.id}>
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
        </section>
    )
}

export default EServiceList