import React, { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';
import { useDispatch, useSelector } from 'react-redux';
import { getPost } from '../../features/postSlice';
import Spinner from '../Loading/Spinner';
import PageHeader from '../PageHeader';

const PostDetail = () => {
    const { id } = useParams();
    const dispath = useDispatch();
    const { post, isLoading } = useSelector(state => state.post);

    useEffect(() => {
        if (id) {
            dispath(getPost(id));
        }
    }, [id]);

    return (
        <section className="about container">
            <h1 className="title">{post?.title}</h1>

            <hr className="my-2" />

            <div className="px-2 pb-4">
                {isLoading && <Spinner />}
                {!isLoading && (
                    <>
                        <PageHeader post={post} />

                        {/* Render content */}
                        {(post?.content_type_id === 1 && post?.intro_text) && (
                            <>
                                <div className="p-2 mt-4 flex justify-center">
                                    <div className="w-3/5 rounded-md overflow-hidden">
                                        <img src={`./${post?.featured}`} alt="headline-pic" />
                                    </div>
                                </div>

                                <div className="p-2 text-lg">
                                    <span>{post?.intro_text}</span>
                                    {/* <span dangerouslySetInnerHTML={{ __html: post?.full_text }}></span> */}
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
                                </div>
                            </>
                        )}

                        {/* Render pdf file */}
                        {(post?.content_type_id === 2 && post?.urls) && (
                            <div className="px-2 pt-2 pb-4 flex justify-center">
                                <object
                                    data={post?.urls}
                                    type="application/pdf"
                                    width="100%"
                                    height="720px"
                                >
                                    <p>Unable to display PDF file.<a href={post?.urls} target="_blank" className="ml-2 underline">Download</a> instead.</p>
                                </object>
                            </div>
                        )}

                        {/* Render image */}
                        {(post?.content_type_id === 3 && post?.featured) && (
                            <div className="p-2 mt-4 flex justify-center">
                                <div className="w-3/5 rounded-md overflow-hidden">
                                    <img src={`./${post?.featured}`} alt="headline-pic" />
                                </div>
                            </div>
                        )}
                    </>
                )}
            </div>
        </section>
    )
}

export default PostDetail