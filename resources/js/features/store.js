import { combineReducers, configureStore } from '@reduxjs/toolkit';
import navbarReducer from './navbarSlice';

export const store = configureStore({
    reducer: combineReducers({
        navbar: navbarReducer
    })
});
