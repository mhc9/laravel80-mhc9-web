import React from 'react'
import { Col, Row } from 'react-bootstrap'
import ReportCard from './Card'

const reports = [
    {
        id: 1,
        title: "รายงานประจำปี 2566",
        featured: "uploads/2024/01/Screenshot 2024-01-24 101332.png",
        urls: "https://mhc9dmh.com/newweb/public/uploads/2024/01/0123202408375065af7ade1f6d5.pdf",
    },
    {
        id: 2,
        title: "รายงานประจำปี 2565",
        featured: "uploads/2024/01/Screenshot 2024-01-24 101433.png",
        urls: "https://mhc9dmh.com/newweb/public/uploads/2024/01/0123202408361365af7a7d440ad.pdf",
    }
];

function AnnualReports() {
    return (
        <section className="policies container">
            <h1 className="title">รายงานประจำปี</h1>

            <hr className="my-2" />

            <div className="policies-wrapper">
                <Row>
                    {reports.map((report, index) => (
                        <Col md={4} key={report.id}>
                            <ReportCard {...report} />
                        </Col>
                    ))}
                </Row>
            </div>
        </section>
    )
}

export default AnnualReports