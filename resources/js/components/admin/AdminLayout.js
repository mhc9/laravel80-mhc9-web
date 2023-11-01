import React, { useEffect, useState } from 'react'
import { Outlet } from 'react-router-dom'
import { useSelector } from 'react-redux'
import Navbar from './Navbar'
import Footer from './Footer'
import { getWindowDimensions } from '../../utils'

const AdminLayout = () => {
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
        <div>
            <Navbar screenWidth={screen.width} />

            <main className="m-0">
                <Outlet />
            </main>

            <Footer />
        </div>
    )
}

export default AdminLayout