import { createSlice, createAsyncThunk } from '@reduxjs/toolkit'
import api from '../api';

const initialState = {
    post: null,
    posts: [],
    pager: null,
    isLoading: false,
    isSuccess: false,
    error: null
};

export const getPosts = createAsyncThunk("post/getPosts", async ({ url }, { rejectWithValue }) => {
    try {
        const response = await api.get(url);

        return response.data;
    } catch (error) {
        rejectWithValue(error);
    }
});

export const postSlice = createSlice({
    name: 'post',
    initialState,
    reducers: {},
    extraReducers: {
        [getPosts.pending]: (state) => {
            state.isLoading = true;
            state.posts = [];
            state.pager = null;
            state.error = null;
        },
        [getPosts.fulfilled]: (state, { payload }) => {
            const { data, ...pager } = payload;

            state.posts = data;
            state.pager = pager;
            state.isLoading = false;
        },
        [getPosts.rejected]: (state, { payload }) => {
            state.isLoading = false;
            state.error = payload;
        },
    }
});

export default postSlice.reducer;

// export const {} = postSlice.actions;
