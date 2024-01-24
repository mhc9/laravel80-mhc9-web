import React from 'react'
import { Modal } from 'react-bootstrap'

const ModalDownload = ({ isShow, onHide }) => {
    return (
        <Modal
            show={isShow}
            onHide={onHide}
        >
            <Modal.Header>ประเมินความพึงพอใจการให้บริการ</Modal.Header>
            <Modal.Body>
                <div className="h-[240px] w-full flex flex-col justify-center items-center p-4">
                    <h2 className="text-xl text-center mb-5">
                        <i className="fas fa-edit"></i>
                        เพื่อการปรับปรุงระบบการให้บริการให้ดียิ่งขึ้น กรุณาประเมินความพึงพอใจการให้บริการ
                    </h2>
                    <div className="flex flex-row gap-2">
                        <a
                            href="https://satsurvey.dmh.go.th/survey/1d09f80697e18d1cf046b82278756eff"
                            target="_blank"
                            className="btn btn-primary"
                        >
                            <i className="fas fa-tasks"></i> ประเมินความพึงพอใจ
                        </a>
                        <a
                            href="http://localhost:32772/laravel80-mhc9web/public/uploads/2024/01/0124202401543065b06dd6a7611.pdf"
                            target="_blank"
                            className="btn btn-success"
                            onClick={onHide}
                        >
                            <i className="fas fa-download"></i> ดาวน์โหลด
                        </a>
                    </div>
                </div>
            </Modal.Body>
        </Modal>
    )
}

export default ModalDownload