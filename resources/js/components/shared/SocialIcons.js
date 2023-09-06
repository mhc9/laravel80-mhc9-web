import React from 'react'

const SocialIcons = () => {
    return (
        <div className="social-icons">
            <a href="https://www.facebook.com/mhc9dmh" target="_blank" rel="noreferrer" className="hover:text-gray-300">
                <i className="fab fa-facebook"></i>
            </a>
            <a href="#" target="_blank" rel="noreferrer" className="hover:text-gray-300">
                <i className="fab fa-twitter"></i>
            </a>
            <a href="#" target="_blank" rel="noreferrer" className="hover:text-gray-300">
                <i className="fab fa-instagram"></i>
            </a>
            <a href="https://www.youtube.com/@user-vf2ep3tx6h" target="_blank" rel="noreferrer" className="hover:text-gray-300">
                <i className="fab fa-youtube"></i>
            </a>
            <a href="#" className="hover:text-gray-300">
                <i className="fab fa-line"></i>
            </a>
            <a href="/contact" className="hover:text-gray-300">
                <i className="fas fa-map-marker-alt"></i>
            </a>
        </div>
    )
}

export default SocialIcons