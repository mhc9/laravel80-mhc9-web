
export const getWindowDimensions = function () {
    const { innerWidth: width, innerHeight: height } = window

    return { width, height }
}

export const rawMarkup = (content) => {
    return { __html: content }
}

export const stripHtml = (html) => {
    if ( typeof DOMParser !== 'undefined') {
        const doc = new window.DOMParser().parseFromString(html, 'text/html');

        return doc.body.textContent || '';
    }

    // return html.replace( /(<([^>]+)>)/ig, '');
}