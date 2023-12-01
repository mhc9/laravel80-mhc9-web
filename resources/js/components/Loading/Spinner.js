import React from 'react'

const Spinner = ({ align='center' }) => {
    return (
        <div className={`d-flex justify-content-${align}`}>
            <div className="spinner-border text-success" role="status">
                <span className="visually-hidden">Loading...</span>
            </div>
        </div>
    )
}

export default Spinner