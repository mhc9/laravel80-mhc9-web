import React from 'react'
import { Modal, Form } from 'react-bootstrap'

const CookieSettings = ({ isShow, onHide }) => {

    const handleAccept = (e) => {
        onSetCookie('mhc9_consent', { _id: uuid(), datestamp: moment().toISOString(), choices: '' });
        onHide();
    };

    return (
        <Modal
            show={isShow}
            onHide={onHide}
            size="lg"
        >
            <Modal.Header className="py-2">
                <h4 className="mb-0">ตั้งค่าความเป็นส่วนตัว</h4>
            </Modal.Header>
            <Modal.Body>
                <div>
                    <h4>จัดการความเป็นส่วนตัว</h4>
                    <div>
                        <div className="flex flex-row justify-between items-center">
                            <h4 className="text-sm font-bold mb-0">คุกกี้ที่มีความจำเป็น (Strictly Necessary Cookies)</h4>
                            <span className="text-blue-600">เปิดใช้งานตลอด</span>
                        </div>
                        <p className="text-xs font-thin">
                            คุกกี้ประเภทนี้มีความจำเป็นต่อการให้บริการเว็บไซต์ของศูนย์สุขภาพจิตที่ 9 เพื่อให้ท่านสามารถเข้าใช้งานในส่วนต่าง ๆ ของเว็บไซต์ได้ รวมถึงช่วยจดจำข้อมูลที่ท่านเคยให้ไว้ผ่านเว็บไซต์ การปิดการใช้งานคุกกี้ประเภทนี้จะส่งผลให้ท่านไม่สามารถใช้บริการในสาระสำคัญของศูนย์สุขภาพจิตที่ 9 ซึ่งจำเป็นต้องเรียกใช้คุกกี้ได้
                        </p>
                    </div>
                    <div>
                        <div className="flex flex-row justify-between items-center">
                            <h4 className="text-sm font-bold mb-0">คุกกี้เพื่อการวิเคราะห์และประเมินผลการใช้งาน (Performance Cookies)</h4>
                            <Form.Check
                                type="switch"
                                id="custom-switch"
                                label=""
                            />
                        </div>
                        <p className="text-xs font-thin">
                            คุกกี้ประเภทนี้ช่วยให้ศูนย์สุขภาพจิตที่ 9 ทราบถึงการปฏิสัมพันธ์ของผู้ใช้งานในการใช้บริการเว็บไซต์ของศูนย์สุขภาพจิตที่ 9 รวมถึงหน้าเพจหรือพื้นที่ใดของเว็บไซต์ที่ได้รับความนิยม ตลอดจนการวิเคราะห์ข้อมูลด้านอื่นๆ ศูนย์สุขภาพจิตที่ 9 ยังใช้ข้อมูลนี้เพื่อการปรับปรุงการทำงานของเว็บไซต์ และเพื่อเข้าใจพฤติกรรมของผู้ใช้งานมากขึ้น ถึงแม้ว่า ข้อมูลที่คุกกี้นี้เก็บรวบรวมจะเป็นข้อมูลที่ไม่สามารถระบุตัวตนได้ และนำมาใช้วิเคราะห์ทางสถิติเท่านั้น การปิดการใช้งานคุกกี้ประเภทนี้จะส่งผลให้ศูนย์สุขภาพจิตที่ 9 ไม่สามารถทราบปริมาณผู้เข้าเยี่ยมชมเว็บไซต์ และไม่สามารถประเมินคุณภาพการให้บริการได้
                        </p>
                    </div>
                    <div>
                        <div className="flex flex-row justify-between items-center">
                            <h4 className="text-sm font-bold mb-0">คุกกี้เพื่อการใช้งานเว็บไซต์ (Functional Cookies)</h4>
                            <Form.Check
                                type="switch"
                                id="custom-switch"
                                label=""
                            />
                        </div>
                        <p className="text-xs font-thin">
                            คุกกี้ประเภทนี้จะช่วยให้เว็บไซต์ของศูนย์สุขภาพจิตที่ 9 จดจำตัวเลือกต่าง ๆ ที่ท่านได้ตั้งค่าไว้และช่วยให้เว็บไซต์ส่งมอบคุณสมบัติและเนื้อหาเพิ่มเติมให้ตรงกับการใช้งานของท่านได้ เช่น ช่วยจดจำชื่อบัญชีผู้ใช้งานของท่าน หรือจดจำการเปลี่ยนแปลงการตั้งค่าขนาดฟอนต์หรือการตั้งค่าต่าง ๆ ของหน้าเพจซึ่งท่านสามารถปรับแต่งได้ การปิดการใช้งานคุกกี้ประเภทนี้อาจส่งผลให้เว็บไซต์ไม่สามารถทำงานได้อย่างสมบูรณ์
                        </p>
                    </div>
                    <div>
                        <div className="flex flex-row justify-between items-center">
                            <h4 className="text-sm font-bold mb-0">คุกกี้เพื่อการโฆษณาไปยังกลุ่มเป้าหมาย (Targeting Cookies)</h4>
                            <Form.Check
                                type="switch"
                                id="custom-switch"
                                label=""
                            />
                        </div>
                        <p className="text-xs font-thin">
                            คุกกี้ประเภทนี้เป็นคุกกี้ที่เกิดจากการเชื่อมโยงเว็บไซต์ของบุคคลที่สาม ซึ่งเก็บข้อมูลการเข้าใช้งานและเว็บไซต์ที่ท่านได้เข้าเยี่ยมชม เพื่อนำเสนอสินค้าหรือบริการบนเว็บไซต์อื่นที่ไม่ใช่เว็บไซต์ของศูนย์สุขภาพจิตที่ 9 ทั้งนี้ หากท่านปิดการใช้งานคุกกี้ประเภทนี้จะไม่ส่งผลต่อการใช้งานเว็บไซต์ของศูนย์สุขภาพจิตที่ 9 แต่จะส่งผลให้การนำเสนอสินค้าหรือบริการบนเว็บไซต์อื่น ๆ ไม่สอดคล้องกับความสนใจของท่าน
                        </p>
                    </div>
                </div>
            </Modal.Body>
            <Modal.Footer className="py-2">
                <div className="flex flex-row justify-between items-center w-full">
                    <button type="button" className="btn btn-primary" onClick={(e) => handleAccept(e)}>
                        ยอมรับทั้งหมด
                    </button>
                    <button type="button" className="btn btn-success">
                        บันทึกการตั้งค่าของคุณ
                    </button>
                </div>
            </Modal.Footer>
        </Modal>
    )
}

export default CookieSettings
