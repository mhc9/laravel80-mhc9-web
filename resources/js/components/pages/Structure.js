import React from 'react'
import StructureAvatar from '../shared/StructureAvatar'

const Structure = () => {
    return (
        <section className="structure">
            <h1 className="title">โครงสร้างองค์กร</h1>

            <hr className="my-2" />

            <div className="container">
                <div className="level-1 rectangle">
                    <StructureAvatar size="80px" />
                    <div className="box-label">
                        <h2>นายทดสอบ ระบบ</h2>
                        <h4>ผู้อำนวยการศูนย์สุขภาพจิตที่ 9</h4>
                    </div>
                </div>
                <ol className="level-2-wrapper">
                    <li>
                        <div className="level-2 rectangle">
                            <StructureAvatar size="70px" />
                            <div className="box-label">
                                <h2>นายทดสอบ ระบบ</h2>
                                <h4>หัวหน้ากลุ่มงานอำนวยการ</h4>
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
                                                <h2 className="">นายทดสอบ ระบบ</h2>
                                                <h4 className="text-sm font-light">งานธุรการ</h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div className="level-4 rectangle">
                                            <StructureAvatar />
                                            <div className="box-label">
                                                <h2 className="">นายทดสอบ ระบบ</h2>
                                                <h4 className="text-sm font-light">งานทรัพยากรบุคคล</h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div className="level-4 rectangle">
                                            <StructureAvatar />
                                            <div className="box-label">
                                                <h2 className="">นายทดสอบ ระบบ</h2>
                                                <h4 className="text-sm font-light">งานการเงินและบัญชี</h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div className="level-4 rectangle">
                                            <StructureAvatar />
                                            <div className="box-label">
                                                <h2 className="">นายทดสอบ ระบบ</h2>
                                                <h4 className="text-sm font-light">งานพัสดุ</h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div className="level-4 rectangle">
                                            <StructureAvatar />
                                            <div className="box-label">
                                                <h2 className="">นายทดสอบ ระบบ</h2>
                                                <h4 className="text-sm font-light">งานเทคโนโลยีสารสนเทศ</h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div className="level-4 rectangle">
                                            <StructureAvatar />
                                            <div className="box-label">
                                                <h2 className="">นายทดสอบ ระบบ</h2>
                                                <h4 className="text-sm font-light">งานยานพาหนะ</h4>
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
                                <h2 className="">นายทดสอบ ระบบ</h2>
                                <h4 className="text-sm font-light">หัวหน้ากลุ่มงานวิชาการสุขภาพจิต</h4>
                            </div>
                        </div>
                        <ol className="level-4-wrapper">
                            <li>
                                <div className="level-4 rectangle4">
                                    <StructureAvatar size="60px" />
                                    <div className="box-label">
                                        <h2 className="">นายทดสอบ ระบบ</h2>
                                        <h4 className="text-sm font-light">งานพัฒนาคุณภาพ</h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div className="level-4 rectangle4">
                                    <StructureAvatar size="60px" />
                                    <div className="box-label">
                                        <h2 className="">นายทดสอบ ระบบ</h2>
                                        <h3 className="text-sm font-light">งานวิจัยและพัฒนา</h3>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div className="level-4 rectangle4">
                                    <StructureAvatar size="60px" />
                                    <div className="box-label">
                                        <h2 className="">นายทดสอบ ระบบ</h2>
                                        <h3 className="text-sm font-light">งานแผนงานและประเมินผล</h3>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div className="level-4 rectangle4">
                                    <StructureAvatar size="60px" />
                                    <div className="box-label">
                                        <h2 className="">นายทดสอบ ระบบ</h2>
                                        <h3 className="text-sm font-light">งานพัฒนาเครือข่ายสุขภาพจิต</h3>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div className="level-4 rectangle4">
                                    <StructureAvatar size="60px" />
                                    <div className="box-label">
                                        <h2 className="">นายทดสอบ ระบบ</h2>
                                        <h3 className="text-sm font-light">งานนิเทศและติดตาม</h3>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div className="level-4 rectangle4">
                                    <StructureAvatar size="60px" />
                                    <div className="box-label">
                                        <h2 className="">นายทดสอบ ระบบ</h2>
                                        <h3 className="text-sm font-light">งานสุขภาพจิตกลุ่มวัย</h3>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div className="level-4 rectangle4">
                                    <StructureAvatar size="60px" />
                                    <div className="box-label">
                                        <h2 className="">นายทดสอบ ระบบ</h2>
                                        <h3 className="text-sm font-light">งานสุขภาพจิตในระบบบริการปฐมภูมิ</h3>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div className="level-4 rectangle4">
                                    <StructureAvatar size="60px" />
                                    <div className="box-label">
                                        <h2 className="">นายทดสอบ ระบบ</h2>
                                        <h3 className="text-sm font-light">งานวิกฤตสุขภาพจิต</h3>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div className="level-4 rectangle4">
                                    <StructureAvatar size="60px" />
                                    <div className="box-label">
                                        <h2 className="">นายทดสอบ ระบบ</h2>
                                        <h3 className="text-sm font-light">งานเฝ้าระวังและป้องกันการฆ่าตัวตาย</h3>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div className="level-4 rectangle4">
                                    <StructureAvatar size="60px" />
                                    <div className="box-label">
                                        <h2 className="">นายทดสอบ ระบบ</h2>
                                        <h3 className="text-sm font-light">งานสื่อสารและประชาสัมพันธ์</h3>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div className="level-4 rectangle4">
                                    <StructureAvatar size="60px" />
                                    <div className="box-label">
                                        <h2 className="">นายทดสอบ ระบบ</h2>
                                        <h3 className="text-sm font-light">งานสุขภาพจิตระหว่างประเทศ</h3>
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