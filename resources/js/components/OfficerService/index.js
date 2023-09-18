import React from 'react'
import services from '../../data/officer-services.json'
import { Link } from 'react-router-dom'

const OfficerService = () => {
    return (
        <div className="officer-box">
            <h1 className="title">สำหรับเจ้าหน้าที่</h1>

            <hr className="my-2" />

            <div className="officer-items">
                {services.map(service => (
                    <Link to={service.link} target='_blank' key={service.id}>
                        <i className={service.icon}></i><h4>{service.name}</h4>
                    </Link>
                ))}
            </div>
        </div>
    )
}

export default OfficerService