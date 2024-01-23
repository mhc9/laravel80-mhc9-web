import React from 'react'

const Downloads = () => {
    return (
        <section className="downloads container">
            <h1 className="title">ดาวน์โหลดเอกสาร</h1>

            <hr className="my-2" />

            <div className="downloads-wrapper">
                <div className="border rounded-md mt-4 mb-2 mx-2 p-2">
                    <div className="flex flex-row gap-2">
                        <input type="text" className="form-control" placeholder="กรอกคำค้น..." />
                        <select className="form-control">
                            <option value="">ทุกหมวดหมู่</option>
                        </select>
                        <button type="button" className="btn btn-primary">
                            ค้นหา
                        </button>
                    </div>
                </div>

                <div className="flex flex-col gap-2">
                    <div className="border rounded-md m-2 px-4 p-2">
                        <div className="flex flex-row justify-between items-center">
                            <div>
                                <div className="flex justify-start items-start">
                                    <span className="text-xl text-red-500 mr-2"><i className="far fa-file-pdf"></i></span>
                                    <h3 className="text-lg m-0">แนวทางการช่วยเหลือและปรับพฤติกรรมเด็กสมาธิสัน ภาวะซึมเศร้า การรังแกกันในโรงเรียน สําหรับครูและผู้ปกครอง</h3>
                                </div>
                                <div className="text-muted text-xs font-thin flex items-center gap-2 mb-2 pl-6">
                                    <span><i className="fas fa-calendar-alt"></i> {'2024-01-22 16.30'} น.</span>
                                    <span><i className="fas fa-user-alt"></i> {'Administrator'}</span>
                                </div>
                            </div>
                            <a href="" target="_blank" className="rounded-full border w-[35px] h-[35px] flex justify-center items-center">
                                <i className="fas fa-angle-down"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    )
}

export default Downloads