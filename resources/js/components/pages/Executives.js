import React from 'react'

const Executives = () => {
    return (
        <section className="executives container">
            <h1 className="title">ผู้บริหารหน่วยงาน</h1>

            <hr className="my-2" />

            <div>
                <div className="executives-wrapper">
                    <div className="director-wrapper">
                        <img src="./img/executive-01.png" alt="executive-pic" />
                        <div>
                            <h3>นายนิตย์ ทองเพชรศรี</h3>
                            <h4>ผู้อำนวยการศูนย์สุขภาพจิตที่ 9</h4>
                        </div>
                    </div>
                    <div className="row vice-wrapper">
                        <div className="col-md-6">
                            <div className="flex flex-col justify-center items-center">
                                <img src="./img/executive-02.png" alt="executive-pic" />
                                <div>
                                    <h3>นางณัฏฐา ศิริผล</h3>
                                    <h4>หัวหน้ากลุ่มงานอำนวยการ</h4>
                                </div>
                            </div>
                        </div>
                        <div className="col-md-6">
                            <div className="flex flex-col justify-center items-center">
                                <img src="./img/executive-03.png" alt="executive-pic" />
                                <div>
                                    <h3>นางสาววรวรรณ หนึ่งด่านจาก</h3>
                                    <h4>หัวหน้ากลุ่มงานวิชาการสุขภาพจิต</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    )
}

export default Executives