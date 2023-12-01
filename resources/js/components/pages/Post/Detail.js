import React, { useEffect, useState } from 'react'
import { useParams } from 'react-router-dom'
import { useDispatch, useSelector } from 'react-redux'
import { getPost } from '../../../features/postSlice'
import Spinner from '../../Loading/Spinner'

const PostDetail = () => {
    const { id } = useParams();
    const dispatch = useDispatch();
    const { post, isLoading } = useSelector(state => state.post);

    useEffect(() => {
        if (id) {
            dispatch(getPost(id));
        }
    }, [id]);

    return (
        <section className="about container">
            <h1 className="title">{post?.title}</h1>

            <hr className="my-2" />

            <div className="px-2">
                {isLoading && <Spinner />}
                {(!isLoading && post) && (
                    <>
                        <div className="text-muted text-xs font-thin flex justify-between items-center mb-2 px-2">
                            <span><i className="fas fa-calendar-alt"></i> {post?.publish_up} น.</span>
                            <span><i className="fas fa-user-alt"></i> {post?.author?.name}</span>
                        </div>

                        <div className="p-2 mt-4 flex justify-center">
                            <div className="w-1/2 rounded-md overflow-hidden">
                                <img src={`./${post?.featured}`} alt="headline-pic" />
                            </div>
                        </div>

                        <div className="p-2 text-lg">
                            <span dangerouslySetInnerHTML={{ __html: post?.full_text }}></span>
                        </div>

                        <div className="flex justify-between items-center pt-2 pb-4">
                            <div className="w-1/2">
                                {post?.tags && (
                                    <div className="font-thin">
                                        {post?.tags.split(',').map((tag, index) => (
                                            <div className="badge rounded-pill bg-secondary me-1" key={index}>
                                                {tag}
                                            </div>
                                        ))}
                                    </div>
                                )}
                            </div>
                            <div className="flex flex-row gap-3 text-lg">
                                <i className="far fa-comment"></i>
                                <i className="far fa-thumbs-up"></i>
                                <i className="fas fa-heart"></i>
                                <i className="fas fa-share-square"></i>
                            </div>
                        </div>
                    </>
                )}
            </div>
        </section>
    )
}

export default PostDetail