import React from 'react'
import { Link } from 'react-router-dom'

const NewsItems = ({ items }) => {
    return (
        <div className="news-list">
            <ul>
                {items.map((item, index) => (
                    <li key={index}>
                        <div><img src="./img/logo_dmh.png" alt="logo-pic" /></div>
                        <p>
                            <Link to={`/posts/${item.id}`}>{item.title}</Link>
                        </p>
                    </li>
                ))}
            </ul>
        </div>
    )
}

export default NewsItems