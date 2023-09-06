import React from 'react';
import ReactDOM from 'react-dom';
import { HashRouter, Routes, Route } from 'react-router-dom';
import { ToastContainer } from 'react-toastify';
import DefaultLayout from './DefaultLayout';
import Home from './pages/Home';
import NotFound from './pages/NotFound';
import About from './pages/About';
import Contact from './pages/Contact';
import Vision from './pages/Vision';
import Structure from './pages/Structure';
import Executives from './pages/Executives';

function App() {
    return (
        <Routes>
            <Route path="/" element={<DefaultLayout />}>
                <Route path="" element={<Home />} />
                <Route path="/about" element={<About />} />
                <Route path="/contact" element={<Contact />} />
                <Route path="/vision" element={<Vision />} />
                <Route path="/structure" element={<Structure />} />
                <Route path="/executives" element={<Executives />} />
            </Route>
            <Route path="*" element={<NotFound />} />
        </Routes>
    );
}

export default App;

if (document.getElementById('root')) {
    ReactDOM.render(
        <HashRouter>
            <App />
            <ToastContainer />
        </HashRouter>,
        document.getElementById('root')
    );
}
