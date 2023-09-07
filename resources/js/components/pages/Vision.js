import React from 'react'

const Vision = () => {
    return (
        <section className="vision container">
            <h1 className="title">
                <i className="fas fa-map-signs"></i>
                วิสัยทัศน์/พันธกิจ/ค่านิยม
            </h1>

            <hr className="my-2" />

            <div>
                <div className="vision-wrapper">
                    <h3>วิสัยทัศน์</h3>
                    <blockquote className="vision-quote">
                        <p>เป็นองค์กรหลักด้านการส่งเสริมสุขภาพจิตและป้องกันปัญหาสุขภาพจิตระดับเขตสุขภาพ<br /> เพื่อประชาชนสุขภาพจิตดี สู่สังคมและเศรษฐกิจมูลค่าสูง</p>
                    </blockquote>
                </div>

                <div className="duty-wrapper">
                    <h3>พันธกิจ</h3>
                    <div>
                        <ol className="gradient-list">
                            <li>ศึกษา วิเคราะห์ วิจัยและพัฒนาองค์ความรู้ด้านการส่งเสริมสุขภาพจิตและป้องกันปัญหาสุขภาพจิตในเขตพื้นที่รับผิดชอบ</li>
                            <li>พัฒนาศักยภาพเครือข่ายในเขตพื้นที่รับผิดชอบ โดยการถ่ายทอดองค์ความรู้และเทคโนโลยีด้านสุขภาพจิต</li>
                            <li>เฝ้าระวังและวางแผนการส่งเสริม ป้องกัน และแก้ไขปัญหาสุขภาพจิตในเขตพื้นที่รับผิดชอบด้วยข้อมูลสารสนเทศด้านสุขภาพจิตที่มีคุณภาพ</li>
                            <li>นิเทศและติดตามผลการปฏิบัติงานด้านสุขภาพจิตของเคือข่ายในเขตพื้นที่รับผิดชอบ</li>
                        </ol>
                    </div>
                </div>

                <div className="core__values-wrapper">
                    <h3>ค่านิยม</h3>
                    <blockquote className="core__values-quote">
                        <p>
                            หัวใจบริการ
                            มุ่งงานคุณภาพ
                            ทำงานเป็นทีม
                            โปร่งใสตรวจสอบได้
                        </p>
                    </blockquote>
                </div>
            </div>
        </section>
    )
}

export default Vision