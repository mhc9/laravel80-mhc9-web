import React from 'react'
import StructureAvatar from './shared/StructureAvatar'


const PageHeader = ({ post }) => {
    return (
        <div className="flex flex-row items-center justify-between mb-2 px-4">
            <div className="flex flex-row items-center gap-3">
                <StructureAvatar size={'40px'} imageUrl="https://www.mhc9dmh.com/data/photo/2258Img.jpg" />
                <div className="flex flex-col justify-center items-start gap-1 text-muted text-xs">
                    <span className="font-bold"><i className="fas fa-user-alt"></i> {post?.author?.name}</span>
                    <span className="font-thin"><i className="fas fa-calendar-alt"></i> {post?.publish_up} น.</span>
                </div>
            </div>

            <div className="flex flex-row gap-3 text-lg">
                {/* <i className="far fa-comment"></i>
                <i className="far fa-thumbs-up"></i>
                <i className="fas fa-heart"></i> */}
                <a
                    className="facebook text-primary"
                    href={`https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.mhc9dmh.com%2Fnewweb%2Fpublic%2F%23%2Fposts%2F${post?.id}`}
                    onClick={() => {
                        window.open(this.href, 'facebook-share','width=500,height=300');
                        return false;
                    }}
                    target="_blank"
                >
                    <i className="fab fa-facebook"></i>
                </a>
                <a
                    className="twitter text-info"
                    href={`http://twitter.com/share?text=${post?.title}&url=https%3A%2F%2Fwww.mhc9dmh.com%2Fnewweb%2Fpublic%2F%23%2Fposts%2F${post?.id}&via=sanyath007`}
                    onClick={() => {
                        window.open(this.href, 'twitter-share', 'width=500,height=300');
                        return false;
                    }}
                    target="_blank"
                >
                    <i className="fab fa-twitter"></i>
                </a>
            </div>
        </div>
    )
}

export default PageHeader