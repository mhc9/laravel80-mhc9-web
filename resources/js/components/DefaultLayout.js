import React, { useEffect, useState } from 'react'
import { Outlet } from 'react-router-dom'
import Footer from './Footer'
import Navbar from './Navbar'
import { getWindowDimensions } from '../utils'

const DefaultLayout = () => {
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
        <div className="defaullt-layout container-fluid">
            <Navbar screenWidth={screen.width} />

            <main className="container" style={{ marginTop: '90px', marginBottom: '15px' }}>
                <Outlet />
            </main>

            <Footer />
        </div>
    )
}

export default DefaultLayout