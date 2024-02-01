import React from 'react'

const ShareButtons = ({ post, btnSize }) => {
    return (
        <div className="flex flex-row items-center gap-2">
            <h5 className="text-sm mb-0">แชร์</h5>
            <div className="flex flex-row gap-3 text-xl">
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
                <a
                    className="line text-success"
                    href={`https://social-plugins.line.me/lineit/share?url=https%3A%2F%2Fwww.mhc9dmh.com%2Fnewweb%2Fpublic%2F%23%2Fposts%2F${post?.id}`}
                    onClick={() => {
                        window.open(this.href, 'line-share', 'width=500,height=300');
                        return false;
                    }}
                    target="_blank"
                >
                    <i className="fab fa-line"></i>
                </a>
            </div>
        </div>
    )
}

export default ShareButtons