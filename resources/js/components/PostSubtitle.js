import React from 'react'

const PostSubtitle = ({ post }) => {
    return (
        <div className="flex gap-2 text-xs text-muted">
            <span className="font-thin text-gray-400"><i className="fas fa-user-alt"></i> {post?.author?.name}</span>
            <span className="font-thin text-gray-400"><i className="fas fa-calendar-alt"></i> {post?.publish_up}</span>
        </div>
    )
}

export default PostSubtitle