/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/** Constant Variables */
window.BASE_URL = 'https://mhc9dmh.com/newweb/public';
window.API_URL = process.env.MIX_APP_URL;

/** Helper function */
const { getWindowDimensions } = require('./utils');
window.getWindowDimensions = getWindowDimensions;

/** Get mocking data */
window.eservices = require('./data/services.json');
window.services = require('./data/officer-services.json');

/** Swiper */
import { Swiper } from 'swiper'
import { Autoplay, Navigation, Pagination } from 'swiper/modules'

Swiper.use(Autoplay);

window.Swiper = Swiper;
window.Navigation = Navigation;
window.Pagination = Pagination;

/** PhotoSwipe */
import Lightbox from 'photoswipe/lightbox';
import PhotoSwipe from 'photoswipe';

window.Lightbox = Lightbox;
window.PhotoSwipe = PhotoSwipe;
