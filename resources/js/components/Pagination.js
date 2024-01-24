import React, { useEffect, useState } from 'react'

const Pagination = ({ pager, onPageClick }) => {
    const [pageNum, setPageNum] = useState([]);

    useEffect(() => {
        if (pager) setPageNum(window._.range(pager.last_page));
    }, [pager]);

    const handlePageClick = (url) => {
        onPageClick(url);
    };

    return (
        <nav aria-label="navigation" className="c9__pagination">
            <ul>
                <li>
                    <button type="button" aria-label="First" onClick={() => handlePageClick(pager.first_page_url)}>
                        <span aria-hidden="true">&laquo;</span>
                    </button>
                </li>

                {pageNum.map(page => (
                    <li key={page} className={`${pager.current_page === page+1 ? 'active' : ''}`}>
                        <button type="button" onClick={() => handlePageClick(`${pager.path}?page=${page+1}`)}>
                            {page+1}
                        </button>
                    </li>
                ))}

                <li>
                    <button type="button" aria-label="Last" onClick={() => handlePageClick(pager.last_page_url)}>
                        <span aria-hidden="true">&raquo;</span>
                    </button>
                </li>
            </ul>
        </nav>
    )
}

export default Pagination;
