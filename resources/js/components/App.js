import React from 'react';
import ReactDOM from 'react-dom';
import { HashRouter, Routes, Route } from 'react-router-dom';
import { Provider } from 'react-redux';
import { CookiesProvider } from 'react-cookie';
import { ToastContainer } from 'react-toastify';
import { store } from '../features/store';
import DefaultLayout from './DefaultLayout';
import NotFound from './pages/NotFound';
import Home from './pages/Home';
import About from './pages/About';
import Contact from './pages/Contact';
import Vision from './pages/Vision';
import Structure from './pages/Structure';
import Executives from './pages/Executives';
import Calendar from './pages/Calendar';
import Links from './pages/Links';
import PostList from './pages/Post/List';
import PostDetail from './pages/Post/Detail';
import NewsList from './pages/News/List'
import NewsDetail from './pages/News/Detail';
import ArticleList from './pages/Article/List';
import ArticleDetail from './pages/Article/Detail';
import VideoList from './pages/Video/List';
import OnepageList from './pages/Onepage/List';
import Downloads from './pages/Downloads'
import Laws from './pages/Laws'
import AnnualReports from './pages/AnnualReports'
import Manuals from './pages/Manuals'
import Policies from './pages/Policies'
import WebsitePolicy from './pages/WebsitePolicy';
import Authority from './pages/Authority';
import Appeal from './pages/Appeal';
import NoCorruption from './pages/NoCorruption';

function App() {
    return (
        <Routes>
            <Route path="/" element={<DefaultLayout />}>
                <Route path="" element={<Home />} />

                {/* รู้จักเรา */}
                <Route path="/about" element={<About />} />
                <Route path="/vision" element={<Vision />} />
                <Route path="/structure" element={<Structure />} />
                <Route path="/executives" element={<Executives />} />
                <Route path="/authority" element={<Authority />} />
                <Route path="/laws" element={<Laws />} />
                <Route path="/policies" element={<Policies />} />
                <Route path="/annual-reports" element={<AnnualReports />} />

                {/* บริการประชาชน */}
                <Route path="/manuals" element={<Manuals />} />
                <Route path="/downloads" element={<Downloads />} />
                <Route path="/appeal" element={<Appeal />} />
                <Route path="/no-corruption" element={<NoCorruption />} />

                {/* ข่าวประชาสัมพันธ์ */}
                <Route path="/posts/list" element={<PostList />} />
                <Route path="/posts/:id" element={<PostDetail />} />
                <Route path="/news/:category/list" element={<NewsList />} />
                <Route path="/news/:id" element={<NewsDetail />} />
                <Route path="/articles/list" element={<ArticleList />} />
                <Route path="/articles/:id" element={<ArticleDetail />} />
                <Route path="/videos/list" element={<VideoList />} />
                <Route path="/onepages/list" element={<OnepageList />} />
                <Route path="/calendar" element={<Calendar />} />

                {/* ติดต่อเรา */}
                <Route path="/contact" element={<Contact />} />
                <Route path="/links" element={<Links />} />

                {/* นโยบาย */}
                <Route path="/website-policy" element={<WebsitePolicy />} />
            </Route>
            <Route path="*" element={<NotFound />} />
        </Routes>
    );
}

export default App;

if (document.getElementById('root')) {
    ReactDOM.render(
        <Provider store={store}>
            <HashRouter>
                <CookiesProvider>
                    <App />
                </CookiesProvider>
                <ToastContainer />
            </HashRouter>
        </Provider>,
        document.getElementById('root')
    );
}
