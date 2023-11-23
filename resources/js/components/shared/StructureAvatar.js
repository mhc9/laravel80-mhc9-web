import React from 'react'

const StructureAvatar = ({ size, imageUrl }) => {
    return (
        <div className="structure-avatar" style={{ width: size || '60px', height: size || '60px' }}>
            {imageUrl
                ? <img src={imageUrl} alt="executive-pic" style={{ width: size || '60px' }} />
                : <img src="./img/executive-01.png" alt="executive-pic" style={{ width: size || '60px' }} />
            }
        </div>
    )
}

export default StructureAvatar