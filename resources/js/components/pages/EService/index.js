import React from 'react'
import services from '../../../data/services.json'
import { Link } from 'react-router-dom'

const EService = () => {
    return (
        <div className="service-box">
            <h1 className="title">ระบบสารสนเทศ (E-Service)</h1>

            <hr className="my-2" />

            <div className="service-wrapper">
                <div className="row service-list">
                    {services.map((service, index) => (
                        <div className="col-md-3 col-sm-6" key={service.id}>
                            {service.external && (
                                <a href={service.link} target={service.target ? service.target : "_blank"}>
                                    <div className="service-item">

                                        <img src={service.img_url} alt={service.name} />
                                        <h4>{service.name}</h4>
                                    </div>
                                </a>
                            )}
                            {!service.external && (
                                <Link to={service.link} target={service.target ? service.target : "_blank"}>
                                    <div className="service-item">

                                        <img src={service.img_url} alt={service.name} />
                                        <h4>{service.name}</h4>
                                    </div>
                                </Link>
                            )}
                        </div>
                    ))}
                </div>
            </div>
        </div>
    )
}

export default EService