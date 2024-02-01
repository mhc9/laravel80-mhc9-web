import React from 'react'
import StructureAvatar from '../shared/StructureAvatar'

const CommentItem = ({ user, ...comment }) => {
    console.log(comment);
    return (
        <div>
            <div className="flex gap-4">
                <StructureAvatar size={'40px'} imageUrl={user.avatar} />
                <div className='w-full'>
                    <div className="flex flex-col md:flex-row items-start md:items-center justify-start gap-1 md:gap-2">
                        <h5 className="mb-0 text-gray-500 text-sm">By {user.name}</h5>
                        <span className="text-gray-400 text-xs">เวลา {comment.created_at}</span>
                    </div>
                    <div
                        className="post-detail py-2 text-sm"
                        dangerouslySetInnerHTML={{ __html: comment?.comment }}
                    ></div>
                </div>
            </div>
        </div>
    )
}

export default CommentItem