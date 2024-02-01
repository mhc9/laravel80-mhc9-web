import React from 'react'
import ShareButtons from '../shared/ShareButtons'
import StructureAvatar from '../shared/StructureAvatar'

const PageHeader = ({ post }) => {
    return (
        <div className="flex flex-row items-center justify-between mb-2 px-4">
            {/* Author info */}
            <div className="flex flex-row items-center gap-3">
                <StructureAvatar size={'40px'} imageUrl="https://www.mhc9dmh.com/data/photo/2258Img.jpg" />
                <div className="flex flex-col justify-center items-start gap-1 text-muted text-xs">
                    <span className="font-bold"><i className="fas fa-user-alt"></i> {post?.author?.name}</span>
                    <span className="font-thin"><i className="fas fa-calendar-alt"></i> {post?.publish_up} น.</span>
                </div>
            </div>

            {/* User interactive */}
            {/* <div className="flex flex-row gap-3 text-lg">
                <i className="far fa-comment"></i>
                <i className="far fa-thumbs-up"></i>
                <i className="fas fa-heart"></i>
            </div> */}

            {/* Share content */}
            <ShareButtons post={post} />
        </div>
    )
}

export default PageHeader