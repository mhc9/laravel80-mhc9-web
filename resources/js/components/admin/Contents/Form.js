import React from 'react'
import { Formik, Form } from 'formik'

const AdminContentForm = () => {
    return (
        <Formik>
            {(formik) => {
                return (
                    <Form>
                        <div class="row">
                            <div class="col-md-12">
                                <label htmlFor="">หัวข้อข่าว</label>
                                <input type="text" className="form-control" />
                            </div>
                            <div class="col-md-12">
                                <label htmlFor="">รายละเอียด</label>
                                <textarea rows={5} className="form-control"></textarea>
                            </div>
                        </div>
                    </Form>
                )
            }}
        </Formik>
    )
}

export default AdminContentForm