import React from 'react'

const Executives = () => {
    return (
        <section className="executives container">
            <h1 className="title">ผู้บริหารหน่วยงาน</h1>

            <hr className="my-2" />

            <div>
                <div className="executives-wrapper">
                    <div className="director-wrapper flex flex-col items-center justify-center text-center mb-[40px]">
                        <img src="./img/executive-01.png" alt="executive-pic" />
                        <div>
                            <h3>นางสาวศิริลักษณ์ แก้วเกียรติพงษ์</h3>
                            <h4>ผู้อำนวยการศูนย์สุขภาพจิตที่ 9</h4>
                        </div>
                    </div>
                    <div className="vice-wrapper">
                        <div className="w-[400px] flex flex-col items-center justify-center text-center">
                            <img src="./img/executive-02.png" alt="executive-pic" />
                            <div>
                                <h3>นางณัฏฐา ศิริผล</h3>
                                <h4>หัวหน้ากลุ่มงานอำนวยการ</h4>
                            </div>
                        </div>
                        <div className="w-[400px] flex flex-col items-center justify-center text-center">
                            <img src="./img/executive-03.png" alt="executive-pic" />
                            <div>
                                <h3>นางภัทรานิษฐ์ ทองตันไตรย์</h3>
                                <h4>หัวหน้ากลุ่มงานวิชาการสุขภาพจิต</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    )
}

export default Executives