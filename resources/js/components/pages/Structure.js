import React from 'react'
import StructureAvatar from '../shared/StructureAvatar'

const Structure = () => {
    return (
        <section className="structure container">
            <h1 className="title">โครงสร้างองค์กร</h1>

            <hr className="my-2" />

            <div className="structure-wrapper">
                <div className="level-1 rectangle">
                    <StructureAvatar size="80px" />
                    <div className="box-label">
                        <h2>น.ส.ทดสอบ ระบบ</h2>
                        <h3>ผู้อำนวยการศูนย์สุขภาพจิตที่ 9</h3>
                    </div>
                </div>
                <ol className="level-2-wrapper">
                    <li>
                        <div className="level-2 rectangle">
                            <StructureAvatar size="70px" />
                            <div className="box-label">
                                <h2>น.ส.ทดสอบ ระบบ</h2>
                                <h3>หัวหน้ากลุ่มงานอำนวยการ</h3>
                            </div>
                        </div>
                        {/* <ol className="level-3-wrapper border">
                            <li> */}
                                {/* <h3 className="level-3 rectangle">หัวหน้ากลุ่มงานอำนวยการ</h3> */}
                                <ol className="level-4-wrapper">
                                    <li>
                                        <div className="level-4 rectangle">
                                            <StructureAvatar />
                                            <div className="box-label">
                                                <h2>น.ส.ทดสอบ ระบบ</h2>
                                                <h4>งานธุรการ</h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div className="level-4 rectangle">
                                            <StructureAvatar />
                                            <div className="box-label">
                                                <h2>น.ส.ทดสอบ ระบบ</h2>
                                                <h4>งานทรัพยากรบุคคล</h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div className="level-4 rectangle">
                                            <StructureAvatar />
                                            <div className="box-label">
                                                <h2>น.ส.ทดสอบ ระบบ</h2>
                                                <h4>งานการเงินและบัญชี</h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div className="level-4 rectangle">
                                            <StructureAvatar />
                                            <div className="box-label">
                                                <h2>น.ส.ทดสอบ ระบบ</h2>
                                                <h4>งานพัสดุ</h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div className="level-4 rectangle">
                                            <StructureAvatar />
                                            <div className="box-label">
                                                <h2>น.ส.ทดสอบ ระบบ</h2>
                                                <h4>งานเทคโนโลยีสารสนเทศ</h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div className="level-4 rectangle">
                                            <StructureAvatar />
                                            <div className="box-label">
                                                <h2>น.ส.ทดสอบ ระบบ</h2>
                                                <h4>งานยานพาหนะ</h4>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            {/* </li>
                        </ol> */}
                    </li>
                    <li>
                        <div className="level-2 rectangle text-left">
                            <StructureAvatar size="70px" />
                            <div className="box-label">
                                <h2>น.ส.ทดสอบ ระบบ</h2>
                                <h3>หัวหน้ากลุ่มงานวิชาการสุขภาพจิต</h3>
                            </div>
                        </div>
                        <ol className="level-4-wrapper">
                            <li>
                                <div className="level-4 rectangle4">
                                    <StructureAvatar size="60px" />
                                    <div className="box-label">
                                        <h2>น.ส.ทดสอบ ระบบ</h2>
                                        <h4>งานพัฒนาคุณภาพ</h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div className="level-4 rectangle4">
                                    <StructureAvatar size="60px" />
                                    <div className="box-label">
                                        <h2>น.ส.ทดสอบ ระบบ</h2>
                                        <h4>งานวิจัยและพัฒนา</h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div className="level-4 rectangle4">
                                    <StructureAvatar size="60px" />
                                    <div className="box-label">
                                        <h2>น.ส.ทดสอบ ระบบ</h2>
                                        <h4>งานแผนงานและประเมินผล</h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div className="level-4 rectangle4">
                                    <StructureAvatar size="60px" />
                                    <div className="box-label">
                                        <h2>น.ส.ทดสอบ ระบบ</h2>
                                        <h4>งานพัฒนาเครือข่ายสุขภาพจิต</h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div className="level-4 rectangle4">
                                    <StructureAvatar size="60px" />
                                    <div className="box-label">
                                        <h2>น.ส.ทดสอบ ระบบ</h2>
                                        <h4>งานนิเทศและติดตาม</h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div className="level-4 rectangle4">
                                    <StructureAvatar size="60px" />
                                    <div className="box-label">
                                        <h2>น.ส.ทดสอบ ระบบ</h2>
                                        <h4>งานสุขภาพจิตกลุ่มวัย</h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div className="level-4 rectangle4">
                                    <StructureAvatar size="60px" />
                                    <div className="box-label">
                                        <h2>น.ส.ทดสอบ ระบบ</h2>
                                        <h4>งานสุขภาพจิตในระบบบริการปฐมภูมิ</h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div className="level-4 rectangle4">
                                    <StructureAvatar size="60px" />
                                    <div className="box-label">
                                        <h2>น.ส.ทดสอบ ระบบ</h2>
                                        <h4>งานวิกฤตสุขภาพจิต</h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div className="level-4 rectangle4">
                                    <StructureAvatar size="60px" />
                                    <div className="box-label">
                                        <h2>น.ส.ทดสอบ ระบบ</h2>
                                        <h4>งานเฝ้าระวังและป้องกันการฆ่าตัวตาย</h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div className="level-4 rectangle4">
                                    <StructureAvatar size="60px" />
                                    <div className="box-label">
                                        <h2>น.ส.ทดสอบ ระบบ</h2>
                                        <h4>งานสื่อสารและประชาสัมพันธ์</h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div className="level-4 rectangle4">
                                    <StructureAvatar size="60px" />
                                    <div className="box-label">
                                        <h2>น.ส.ทดสอบ ระบบ</h2>
                                        <h4>งานสุขภาพจิตระหว่างประเทศ</h4>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </li>
                </ol>
            </div>
        </section>
    )
}

export default Structure