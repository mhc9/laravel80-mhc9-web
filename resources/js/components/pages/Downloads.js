import React, { useState } from 'react'
import ModalDownload from '../Modals/Download'

const Downloads = () => {
    const [showModalDownload, setShowModalDownload] = useState(false);

    return (
        <section className="downloads container">
            <h1 className="title">ดาวน์โหลดเอกสาร</h1>

            <hr className="my-2" />

            <div className="downloads-wrapper">
                <ModalDownload
                    isShow={showModalDownload}
                    onHide={() => setShowModalDownload(false)}
                />

                <div className="border rounded-md mt-4 mb-2 mx-4 p-2">
                    <div className="flex flex-row gap-2">
                        <input type="text" className="form-control" placeholder="กรอกคำค้น..." />
                        <select className="form-control">
                            <option value="">ทุกหมวดหมู่</option>
                            <option value="1">คู่มือการให้บริการ/ปฏิบัติงาน</option>
                            <option value="2">สื่อความรู้สุขภาพจิต</option>
                            <option value="3">งานวิจัย/บทความวิชาการ</option>
                        </select>
                        <button type="button" className="btn btn-primary">
                            ค้นหา
                        </button>
                    </div>
                </div>

                <div className="flex flex-col gap-2 pt-2 pb-4 px-4">
                    <div className="my-2">
                        <h4>หมวดคู่มือการให้บริการ/ปฏิบัติงาน</h4>
                        <div className="border rounded-md px-4 p-2">
                            <div className="flex flex-row justify-between items-center">
                                <div>
                                    <div className="flex justify-start items-start">
                                        <span className="text-xl text-red-500 mr-2"><i className="far fa-file-pdf"></i></span>
                                        <h3 className="text-lg m-0">แนวทางการช่วยเหลือและปรับพฤติกรรมเด็กสมาธิสัน ภาวะซึมเศร้า การรังแกกันในโรงเรียน สําหรับครูและผู้ปกครอง</h3>
                                    </div>
                                    <div className="text-muted text-xs font-thin flex items-center gap-4 mb-2 pl-6">
                                        <span><i className="fas fa-calendar-alt"></i> {'2024-01-22 16.30'} น.</span>
                                        <span><i className="fas fa-user-alt"></i> {'Administrator'}</span>
                                        <span><i className="fas fa-eye"></i> {'0'}</span>
                                        <span><i className="fas fa-download"></i> {'0'}</span>
                                    </div>
                                </div>
                                <button type="button" className="btn btn-light" onClick={() => setShowModalDownload(true)}>
                                    <i className="fas fa-download"></i> ดาวน์โหลด
                                </button>
                            </div>
                        </div>
                    </div>

                    <div className="my-2">
                        <h4>หมวดสื่อความรู้สุขภาพจิต</h4>
                        <div className="border rounded-md px-4 p-2">

                        </div>
                    </div>

                    <div className="my-2">
                        <h4>หมวดงานวิจัย/บทความวิชาการ</h4>
                        <div className="border rounded-md px-4 p-2">

                        </div>
                    </div>

                    <div className="my-2">
                        <h4>หมวดการจัดการความรู้/ถอดบทเรียน</h4>
                        <div className="border rounded-md px-4 p-2">

                        </div>
                    </div>

                    <div className="my-2">
                        <h4>หมวดนวัตกรรม</h4>
                        <div className="border rounded-md px-4 p-2">

                        </div>
                    </div>

                    <div className="my-2">
                        <h4>หมวดอื่นๆ</h4>
                        <div className="border rounded-md px-4 p-2">

                        </div>
                    </div>

                </div>
            </div>
        </section>
    )
}

export default Downloads