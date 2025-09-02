<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;
use Illuminate\Support\MessageBag;
// use App\Services\PostService;
use App\Models\Question;

class QAndAController extends Controller
{
    protected $postService;

    /**
    * Create a new PostService instance.
    *
    * @return void
    */
    // public function __construct(PostService $postService)
    // {
    //     $this->postService = $postService;
    // }

    public function index() {
        return view('q&a.index');
    }

    public function search(Request $req)
    {
        /** Get params from query string */
        // $cate = $req->get('cate');
        // $type = $req->get('type');
        // $group = $req->get('group');
        // $name = $req->get('name');
        // $limit = !empty($req->get('limit')) ? $req->get('limit') : 10;

        // $posts = Post::with('category','author')
                    // ->when(!empty($type), function($q) use ($type) {
                    //     $q->where('plan_type_id', $type);
                    // })
                    // ->when(!empty($cate), function($q) use ($cate) {
                    //     $q->where('category_id', $cate);
                    // })
                    // ->when(!empty($group), function($q) use ($group) {
                    //     $q->where('group_id', $group);
                    // })
                    // ->when(!empty($name), function($q) use ($name) {
                    //     $q->where(function($query) use ($name) {
                    //         $query->where('item_name', 'like', '%'.$name.'%');
                    //         $query->orWhere('en_name', 'like', '%'.$name.'%');
                    //     });
                    // })
        //             ->orderBy('publish_up', 'DESC')
        //             ->orderBy('id', 'DESC')
        //             ->paginate($limit);

        // return $posts;
    }

    public function getAll(Request $req)
    {
        /** Get params from query string */
        // $type = $req->get('type');

        // $posts = Post::with('category','author')
                    // ->when(!empty($type), function($q) use ($type) {
                    //     $q->where('type_id', $type);
                    // })
                    // ->when(!empty($cate), function($q) use ($cate) {
                    //     $q->where('category_id', $cate);
                    // })
                    // ->when(!empty($group), function($q) use ($group) {
                    //     $q->where('group_id', $group);
                    // })
                    // ->when(!empty($name), function($q) use ($name) {
                    //     $q->where('item_name', 'like', '%'.$name.'%');
                    //     $q->orWhere('en_name', 'like', '%'.$name.'%');
                    // })
                    // ->when($inStock != '', function($q) use ($inStock) {
                    //     $q->where('in_stock', $inStock);
                    // })
                    // ->orderBy('publish_up', 'DESC')
        //             ->get();

        // return $posts;
    }

    public function getById($id)
    {
        // $post =  Post::with('category','author')->find($id);

        // return $post;
    }
}
