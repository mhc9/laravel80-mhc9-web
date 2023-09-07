import React from 'react'
import { useDispatch } from 'react-redux'
import { toggleSidebar } from '../../features/navbarSlice';

const NavMobileMenu = () => {
    const dispatch = useDispatch();

    return (
        <div className="mobile-menu" onClick={() => dispatch(toggleSidebar())}>
            <div className="sidenav-btn">
                <div className="hamburger">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    )
}

export default NavMobileMenu