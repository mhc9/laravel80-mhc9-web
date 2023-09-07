import { createSlice } from '@reduxjs/toolkit'

const initialState = {
    isShowSidebar: false
};

export const navbarSlice = createSlice({
    name: 'navbar',
    initialState,
    reducers: {
        hideSidebar: (state) => {
            state.isShowSidebar = false;
        },
        showSidebar: (state) => {
            state.isShowSidebar = true;
        },
        toggleSidebar: (state) => {
            state.isShowSidebar = !state.isShowSidebar;
        },
    }
});

export default navbarSlice.reducer;

export const { hideSidebar, showSidebar, toggleSidebar } = navbarSlice.actions;
