import React from 'react'
import StructureAvatar from '../shared/StructureAvatar'

const Executives = () => {
    return (
        <section className="executives container">
            <h1 className="title">ผู้บริหารหน่วยงาน</h1>

            <hr className="my-2" />

            <div>
                <div className="executives-wrapper">
                    <div className="director-wrapper">
                        <StructureAvatar
                            size="120px"
                            imageUrl="https://www.mhc9dmh.com/data/photo/boss67.jpg"
                        />
                        <div className="mt-2">
                            <h3>นายนิตย์ ทองเพชรศรี</h3>
                            <h4>ผู้อำนวยการศูนย์สุขภาพจิตที่ 9</h4>
                            <h4>โทรศัพท์ 09 7918 6374</h4>
                        </div>
                    </div>
                    <div className="row vice-wrapper">
                        <div className="col-md-6">
                            <div className="flex flex-col justify-center items-center">
                                <StructureAvatar
                                    size="120px"
                                    imageUrl="https://www.mhc9dmh.com/data/photo/19Img.jpg"
                                />
                                <div className="mt-2">
                                    <h3>นางณัฏฐา ศิริผล</h3>
                                    <h4>หัวหน้ากลุ่มงานอำนวยการ</h4>
                                    <h4>โทรศัพท์ 08 7863 6634</h4>
                                </div>
                            </div>
                        </div>
                        <div className="col-md-6">
                            <div className="flex flex-col justify-center items-center">
                                <StructureAvatar
                                    size="120px"
                                    imageUrl="https://www.mhc9dmh.com/data/photo/9Img.jpg"
                                />
                                <div className="mt-2">
                                    <h3>นางสาววรวรรณ หนึ่งด่านจาก</h3>
                                    <h4>หัวหน้ากลุ่มงานวิชาการสุขภาพจิต</h4>
                                    <h4>โทรศัพท์ 08 1266 6053</h4>
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