import React from 'react'
import { timeSince } from '../../utils'

const PageSubtitle = ({ post, textSize="xs" }) => {
    return (
        <div className={`flex gap-2 text-muted`}>
            <span className={`text-${textSize} text-gray-400 font-thin`}>
                <i className="fas fa-user-alt"></i> {post?.author?.name}
            </span>
            <span className={`text-${textSize} text-gray-400 font-thin`}>
                <i className="fas fa-calendar-alt"></i> {timeSince(post?.publish_up)}
            </span>
        </div>
    )
}

export default PageSubtitle