import React, { useEffect, useState } from 'react'
import { Outlet } from 'react-router-dom'
import { useSelector } from 'react-redux'
import Footer from './Footer'
import Navbar from './Navbar'
import Sidebar from './Sidebar'
import { getWindowDimensions } from '../utils'

const DefaultLayout = () => {
    const { isShowSidebar } = useSelector(state => state.navbar);
    const [screen, setScreen] = useState({ width: 0, height: 0 });

    useEffect(() => {
        setScreen(getWindowDimensions());
    }, []);

    useEffect(() => {
        window.addEventListener('resize', handleResize);

        return () => window.removeEventListener('resize', handleResize);
    }, []);

    const handleResize = () => {
        setScreen(getWindowDimensions());
    };

    return (
        <div className="defaullt-layout">
            <Navbar screenWidth={screen.width} />

            <main>
                <Outlet />
            </main>

            <Footer />

            <Sidebar
                isShow={isShowSidebar}
                screenWidth={screen.width}
            />
        </div>
    )
}

export default DefaultLayout