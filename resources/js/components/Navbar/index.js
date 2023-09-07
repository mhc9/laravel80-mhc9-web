import React from 'react'
import NavLogo from './NavLogo'
import NavMenu from './NavMenu'
import NavMobileMenu from '../Navbar/NavMobileMenu'

const Navbar = ({ screenWidth }) => {
    return (
        <nav className="topnav">
            <div className="container">
                <div className="wrapper" style={{ width: '100%' }}>
                    <div className="menu-container" style={{ width: '100%' }}>
                        <div className="container">
                            <div className="menu-wrapper">
                                {/* ================ Logo ================ */}
                                <NavLogo />

                                {/* ================ Options ================ */}
                                {/* <MenuOptions /> */}

                                {/* ================ Menus ================ */}
                                <NavMenu />

                                {/* ================ Mobile ================ */}
                                <NavMobileMenu />
                            </div>
                        </div>
                    </div>
                    {/* /.menu-container */}
                </div>
                {/* /.wrapper */}
            </div>
            {/* /.container */}
        </nav>
    )
}

export default Navbar