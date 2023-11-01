import React, { useEffect } from 'react'
import { Link } from 'react-router-dom'
import api from '../../../api'

const AdminContentList = () => {

    useEffect(() => {
        getContents();
    }, []);

    const getContents = async () => {
        const res = await api.get('/api/contents/search');
        
        console.log(res.data);
    };

    return (
        <div className="bg-white p-4" style={{ minHeight: '80vh' }}>
            <nav aria-label="breadcrumb">
                <ol className="breadcrumb">
                    <li className="breadcrumb-item"><a href="#">Home</a></li>
                    <li className="breadcrumb-item active" aria-current="page">Web Content</li>
                </ol>
            </nav>

            <div>
                <div className="flex flex-row justify-between items-center mb-2">
                    <h3 className="font-bold text-xl">Web Content</h3>
                    <Link to="new" className="btn btn-primary">เพิ่มรายการ</Link>
                </div>

                <table className="table table-bordered">
                    <thead>
                        <tr>
                            <th className="text-center w-[5%]">#</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th className="text-center w-[10%]">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    )
}

export default AdminContentList