import React from 'react'
import SocialIcons from '../shared/SocialIcons'

const Contact = () => {
    return (
        <section className="contact">
            <h1 className="title">ติดต่อเรา</h1>

            <hr className="my-2" />

            <div className="contact-wrapper">
                <div className="contact-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d481.77113921239504!2d102.10472111115492!3d14.98331467849054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31194c9cbc345f15%3A0x9bb83d25272fc25f!2z4Lio4Li54LiZ4Lii4LmM4Liq4Li44LiC4Lig4Liy4Lie4LiI4Li04LiV4LiX4Li14LmIIDk!5e0!3m2!1sth!2sth!4v1677488232052!5m2!1sth!2sth"
                        style={{ width: '100%', height: '520px', border: '1px solid #dadada' }}
                        loading="lazy"
                        referrerPolicy="no-referrer-when-downgrade"
                    ></iframe>
                </div>
                <div className="contact-text">
                    <h2>ศูนย์สุขภาพจิตที่ 9</h2>
                    <ul>
                        <li>เลขที่ 86 ถ.ช้างเผือก อ.เมือง จ.นครราชสีมา 30000</li>
                        <li>โทรศัพท์ 0-4425-6729</li>
                        <li>โทรสาร 0-4425-6730</li>
                        <li>อีเมล mhc9dmh@gmail.com</li>
                    </ul>
                    
                    <SocialIcons />
                </div>
            </div>
        </section>
    )
}

export default Contact