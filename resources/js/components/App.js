import React from 'react';
import ReactDOM from 'react-dom';
import { HashRouter, Routes, Route } from 'react-router-dom';
import { Provider } from 'react-redux';
import { CookiesProvider } from 'react-cookie';
import { ToastContainer } from 'react-toastify';
import DefaultLayout from './DefaultLayout';
import Home from './pages/Home';
import NotFound from './pages/NotFound';
import About from './pages/About';
import Contact from './pages/Contact';
import Vision from './pages/Vision';
import Structure from './pages/Structure';
import Executives from './pages/Executives';
import { store } from '../features/store';
import Calendar from './pages/Calendar';
import Links from './pages/Links';

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

                {/* ข่าวประชาสัมพันธ์ */}
                <Route path="/calendar" element={<Calendar />} />

                {/* บริการประชาชน */}

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
