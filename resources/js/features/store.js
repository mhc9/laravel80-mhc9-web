import { combineReducers, configureStore } from '@reduxjs/toolkit';
import navbarReducer from './navbarSlice';
import postReducer from './postSlice';

export const store = configureStore({
    reducer: combineReducers({
        navbar: navbarReducer,
        post: postReducer,
    })
});
