<nav aria-label="navigation" class="c9__pagination">
    <ul>
        <li>
            <a href="{{ $path }}?page=1" aria-label="First">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>

        <!-- {pageNum.map(page => (
            <li key={page} class={`${pager.current_page === page+1 ? 'active' : ''}`}>
                <a href="#">
                    {page+1}
                </a>
            </li>
        ))} -->

        <li>
            <a href="{{ $path }}?page={{ $lastPage }}" aria-label="Last">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>