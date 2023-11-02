import React, { useState } from 'react'
import { Formik, Form } from 'formik'
import * as Yup from 'yup'
import ReactQuill from 'react-quill'
import { convertToRaw } from 'draft-js'
import draftToHtml from 'draftjs-to-html'
import 'react-quill/dist/quill.snow.css'

const contentSchema = Yup.object().shape({

})

const AdminContentForm = () => {
    const [value, setValue] = useState('');
    console.log(value);

    const handleSubmit = (values, formik) => {
        console.log(values);
    };

    return (
        <Formik
            initialValues={{
                title: '',
                full_text: ''
            }}
            validationSchema={contentSchema}
            onSubmit={handleSubmit}
        >
            {(formik) => {
                return (
                    <Form>
                        <div className="row mb-2">
                            <div className="col-md-8">
                                <div className="col-md-12">
                                    <label htmlFor="">หัวข้อข่าว</label>
                                    <input
                                        type="text"
                                        name="title"
                                        value={formik.values.title}
                                        onChange={formik.handleChange}
                                        className="form-control"
                                    />
                                </div>
                                <div className="col-md-12">
                                    <label htmlFor="">รายละเอียด</label>
                                    <ReactQuill
                                        theme="snow"
                                        value={value}
                                        onChange={setValue}
                                        modules={{
                                            toolbar: [
                                                ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
                                                ['blockquote', 'code-block'],

                                                [{ 'header': 1 }, { 'header': 2 }],               // custom button values
                                                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                                                [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
                                                [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
                                                [{ 'direction': 'rtl' }],                         // text direction

                                                [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
                                                [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                                                [ 'link', 'image', 'video', 'formula' ],          // add's image support
                                                [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
                                                [{ 'font': [] }],
                                                [{ 'align': [] }],

                                                ['clean']
                                            ]
                                        }}
                                    />
                                </div>
                            </div>
                            <div className="col-md-4">
                                <div className="flex flex-row justify-start">
                                    <button type="submit" className="btn btn-primary">
                                        บันทึก
                                    </button>
                                </div>
                                <div className="col-md-6">
                                    <label htmlFor="">ประเภท</label>
                                    <select name="" className="form-control">
                                        <option value="">-- เลือก --</option>
                                    </select>
                                </div>
                                <div className="col-md-6">
                                    <label htmlFor="">ผู้แต่ง</label>
                                    <select name="" className="form-control">
                                        <option value="">-- เลือก --</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </Form>
                )
            }}
        </Formik>
    )
}

export default AdminContentForm