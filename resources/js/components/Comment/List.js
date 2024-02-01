import React from 'react'
import CommentItem from './Item'

const CommentList = ({ comments }) => {
    return (
        <div className="flex flex-col px-8 max-md:px-0 mt-4 w-3/4">
            <div className="flex flex-row justify-start items-center gap-2 ml-1 text-base">
                <i class="far fa-comment"></i>
                <span className="flex items-center gap-1 font-bold">{comments.length} ความคิดเห็น</span>
            </div>
            <div className="flex flex-col gap-2">
                {comments && comments.map(comment => (
                    <div className="border rounded-md p-3">
                        <CommentItem
                            user={comment.user}
                            { ...comment}
                        />
                    </div>
                ))}
            </div>
        </div>
    )
}

export default CommentList