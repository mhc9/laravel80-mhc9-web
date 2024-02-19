import React from 'react'
import { Link } from 'react-router-dom'

const OptionMenu = () => {
    return (
        <div className="option-menus">
            <div className="container">
                <div className="contents">
                    <Link to="/news/3/list" className="content">
                        <div className="wrapper">
                            <div className="text-container">
                                <h6 className="ellipsis-1">จัดซื้อจัดจ้าง</h6>
                            </div>
                            {/* <div className="banner">
                                <FaAddressCard />
                            </div> */}
                            <div className="order">01</div>
                        </div>
                    </Link>
                    <Link to="news/4/list" className="content">
                        <div className="wrapper">
                            <div className="text-container">
                                <h6 className="ellipsis-1">ร่วมงานกับเรา</h6>
                            </div>
                            {/* <div className="banner">
                                <i className="icon fas fa-address-card"></i>
                            </div> */}
                            <div className="order">02</div>
                        </div>
                    </Link>
                    <Link to="/faq" className="content">
                        <div className="wrapper">
                            <div className="text-container">
                                <h6 className="ellipsis-1">คำถามที่ถามบ่อย</h6>
                            </div>
                            {/* <div className="banner">
                                <i className="icon fas fa-address-card"></i>
                            </div> */}
                            <div className="order">03</div>
                        </div>
                    </Link>
                    <a href="https://secret.dmh.go.th/main" target="_blank" className="content">
                        <div className="wrapper">
                            <div className="text-container">
                                <h6 className="ellipsis-1">แจ้งเรื่องร้องเรียน</h6>
                            </div>
                            {/* <div className="banner">
                                <i className="icon fas fa-address-card"></i>
                            </div> */}
                            <div className="order">04</div>
                        </div>
                    </a>
                    <Link to="/downloads" className="content">
                        <div className="wrapper">
                            <div className="text-container">
                                <h6 className="ellipsis-1">ดาวน์โหลด</h6>
                            </div>
                            {/* <div className="banner">
                                <i className="icon fas fa-address-card"></i>
                            </div> */}
                            <div className="order">05</div>
                        </div>
                    </Link>
                    <a className="content">
                        <div className="wrapper">
                            <div className="text-container">
                                <h6 className="ellipsis-1">ศูนย์ข้อมูลข่าวสาร</h6>
                            </div>
                            {/* <div className="banner">
                                <i className="icon fas fa-address-card"></i>
                            </div> */}
                            <div className="order">06</div>
                        </div>
                    </a>
                    <Link to="/ita" className="content">
                        <div className="wrapper">
                            <div className="text-container">
                                <h6 className="ellipsis-1">ควบคุมภายใน</h6>
                            </div>
                            {/* <div className="banner">
                                <i className="icon fas fa-address-card"></i>
                            </div> */}
                            <div className="order">07</div>
                        </div>
                    </Link>
                    <Link to="/moral-club" className="content">
                        <div className="wrapper">
                            <div className="text-container">
                                <h6 className="ellipsis-1">ชมรมคุณธรรมฯ</h6>
                            </div>
                            {/* <div className="banner">
                                <FaGavel />
                            </div> */}
                            <div className="order">08</div>
                        </div>
                    </Link>
                </div>
            </div>
        </div>
    )
}

export default OptionMenu