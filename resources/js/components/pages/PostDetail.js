import React, { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';
import { useDispatch, useSelector } from 'react-redux';
import { getPost } from '../../features/postSlice';
import Spinner from '../Loading/Spinner';
import PageHeader from '../common/PageHeader';
import CommentList from '../Comment/List';

const comments = [
    {
        id: 1,
        user: { name: 'Admin', avatar: 'https://www.mhc9dmh.com/data/photo/2258Img.jpg' },
        comment: 'Hello World!!',
        created_at: '2024-02-01 14:00:00'
    },
    {
        id: 2,
        user: { name: 'Admin', avatar: 'https://www.mhc9dmh.com/data/photo/2258Img.jpg' },
        comment: 'สวัสดี ชาวโลก!!',
        created_at: '2024-02-01 14:00:00'
    }
];

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

                        <div>
                            {/* Render content */}
                            {(post?.content_type_id === 1 && post?.intro_text) && (
                                <>
                                    <div className="p-2 mt-4 flex justify-center">
                                        <div className="flex justify-center w-3/5 rounded-md overflow-hidden border object-cover">
                                            <img src={`./${post?.featured}`} alt="headline-pic" />
                                        </div>
                                    </div>

                                    <div className="flex justify-center py-2 text-lg max-md:text-sm">
                                        {/* <span>{post?.intro_text}</span> */}
                                        <div className="post-detail w-4/5" dangerouslySetInnerHTML={{ __html: post?.full_text }}></div>
                                    </div>
                                </>
                            )}

                            {/* Render pdf file */}
                            {(post?.content_type_id === 2 && post?.urls) ? (
                                <div className="px-10 pt-2 pb-4 flex justify-center">
                                    <object
                                        data={post?.urls}
                                        type="application/pdf"
                                        width="100%"
                                        height="720px"
                                    >
                                        <p>Unable to display PDF file.<a href={post?.urls} target="_blank" className="ml-2 underline">Download</a> instead.</p>
                                    </object>
                                </div>
                            ) : null}

                            {/* Render image */}
                            {(post?.content_type_id === 3 && post?.urls) ? (
                                <div className="p-2 mt-4 flex justify-center">
                                    <div className="w-3/5 max-md:w-[90%] rounded-md overflow-hidden">
                                        <img src={post?.urls} alt="headline-pic" />
                                    </div>
                                </div>
                            ) : null}

                            {/* Page Buttom */}
                            <div className="px-10 max-md:px-5 mt-2">
                                <div className={`flex max-md:flex-col justify-between items-center max-md:gap-2 border-t-[1px] ${post?.comment_status === 'open' && 'border-b-[1px]'} w-full py-2 px-2`}>
                                    <div className="flex justify-start items-center w-1/2 max-md:w-full">
                                        {post?.tags && post?.tags.split(',').map((tag, index) => (
                                            <div className="badge rounded-pill bg-secondary mr-1" key={index}>
                                                {tag}
                                            </div>
                                        ))}
                                    </div>

                                    {/* User interactive */}
                                    <div className="flex flex-row justify-end max-md:justify-start items-center gap-4 w-1/2 max-md:w-full">
                                        {post?.comment_status === 'open' && <span className="text-base max-md:text-xs"><i className="far fa-comment"></i> 2</span>}
                                        <span className="text-base max-md:text-xs"><i className="far fa-thumbs-up"></i> 20</span>
                                        <span className="text-base max-md:text-xs"><i className="far fa-eye"></i> 50</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {/* Comments */}
                        {post?.comment_status === 'open' && (
                            <div className="flex flex-col justify-center items-center py-4">
                                <div className="w-3/4">
                                    <div className="flex flex-row justify-start items-center gap-2 ml-1 text-lg">
                                        <i class="far fa-comment"></i>
                                        <span className="font-bold">แสดงความคิดเห็น</span>
                                    </div>
                                    <textarea rows={5} className="form-control mb-2"></textarea>
                                </div>

                                <CommentList comments={comments} />
                            </div>
                        )}
                    </>
                )}
            </div>
        </section>
    )
}

export default PostDetail