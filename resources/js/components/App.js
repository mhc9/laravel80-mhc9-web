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
import PostList from './Post/List';
import NewsList from './News/List'
import ArticleList from './Article/List';
import VideoList from './Video/List';
import InfographicList from './Infographic/List';
import Downloads from './pages/Downloads'
import Laws from './pages/Laws'
import AnnualReports from './pages/AnnualReports'
import Manuals from './pages/Manuals'
import Policies from './pages/Policies'

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
                <Route path="/laws" element={<Laws />} />
                <Route path="/policies" element={<Policies />} />
                <Route path="/annual-reports" element={<AnnualReports />} />

                {/* บริการประชาชน */}
                <Route path="/manuals" element={<Manuals />} />
                <Route path="/downloads" element={<Downloads />} />

                {/* ข่าวประชาสัมพันธ์ */}
                <Route path="/posts/list" element={<PostList />} />
                <Route path="/news/:type/list" element={<NewsList />} />
                <Route path="/articles/list" element={<ArticleList />} />
                <Route path="/videos/list" element={<VideoList />} />
                <Route path="/infographics/list" element={<InfographicList />} />
                <Route path="/calendar" element={<Calendar />} />

                {/* ติดต่อเรา */}
                <Route path="/contact" element={<Contact />} />
                <Route path="/links" element={<Links />} />
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
