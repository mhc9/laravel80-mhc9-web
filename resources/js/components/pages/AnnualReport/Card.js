import React from 'react'
import { Card } from 'react-bootstrap'

const ReportCard = ({ title, featured, urls }) => {
    return (
        <Card>
            <Card.Img src={`./${featured}`} variant="top" />
            <Card.Body>
                <Card.Text className="text-xl font-bold mb-1">{title}</Card.Text>
                <div className="text-muted text-xs font-thin flex items-center gap-2 mb-2">
                    <span><i className="fas fa-calendar-alt"></i> {'2024-01-22 16.30'} น.</span>
                    <span><i className="fas fa-user-alt"></i> {'Administrator'}</span>
                    <span><i className="fas fa-eye"></i> {'0'}</span>
                    <span><i className="fas fa-download"></i> {'0'}</span>
                </div>
                <div className="flex justify-center pt-4">
                    <a href={urls} target="_blank" className="btn btn-light">
                        <i className="fas fa-download"></i> ดาวน์โหลด
                    </a>
                </div>
            </Card.Body>
        </Card>
    )
}

export default ReportCard