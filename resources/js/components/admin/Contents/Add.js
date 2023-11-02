import React from 'react'
import AdminContentForm from './Form'
import { Link } from 'react-router-dom'

const AdminAddContent = () => {
    return (
        <div className="bg-white p-4" style={{ minHeight: '80vh' }}>
            <nav aria-label="breadcrumb">
                <ol className="breadcrumb">
                    <li className="breadcrumb-item"><Link to="">Home</Link></li>
                    <li className="breadcrumb-item"><Link to="/admin/contents">Content List</Link></li>
                    <li className="breadcrumb-item active" aria-current="page">Add Content</li>
                </ol>
            </nav>

            <div>
                <div className="flex flex-row justify-between items-center mb-1">
                    <h3 className="font-bold text-xl">Add Content</h3>
                </div>

                <div className="border rounded-lg px-3 py-4">
                    <AdminContentForm />
                </div>
            </div>
        </div>
    )
}

export default AdminAddContent