import React from 'react'
import NavLogo from './NavLogo'
import NavMenu from './NavMenu'

const Navbar = () => {
    return (
        <nav className="topnav">
            <div className="container">
                <div className="wrapper" style={{ width: '100%' }}>
                    <div className="menu-container" style={{ width: '100%' }}>
                        <div className="container">
                            <div className="menu-wrapper">
                                {/* ================================ Nav Logo ================================ */}
                                <NavLogo />
                                {/* ================================ End Nav Logo ================================ */}

                                {/* ================================ Menu Options ================================ */}
                                {/* <MenuOptions /> */}
                                {/* ================================ End menu Options ================================ */}

                                {/* ================================ Nav menus ================================ */}
                                <NavMenu />
                                {/* ================================ End nav menus ================================ */}

                                {/* ================================ Nav mobile ================================ */}
                                {/* <MenuMobile /> */}
                                {/* ================================ End nav mobile ================================ */}
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