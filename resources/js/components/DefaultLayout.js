import React from 'react'
import { Outlet } from 'react-router-dom'
import Footer from './Footer'
import Navbar from './Navbar'

const DefaultLayout = () => {
    return (
        <div className="defaullt-layout container-fluid">
            <Navbar />

            <main className="container" style={{ marginTop: '90px', marginBottom: '15px' }}>
                <Outlet />
            </main>

            <Footer />
        </div>
    )
}

export default DefaultLayout