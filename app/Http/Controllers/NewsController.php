<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;
use Illuminate\Support\MessageBag;
use App\Services\PostService;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;

class NewsController extends Controller
{
    protected $postService;

    /**
    * Create a new PostService instance.
    *
    * @return void
    */
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function getPost($id)
    {
        $post =  Post::with('category','author')->find($id);

        return view('post.detail', ['post' => $post]);
    }

    public function getPostsByCategory(Request $req, $cate)
    {
        $limit  = !empty($req->get('limit')) ? $req->get('limit') : 5;
        $title = PostCategory::find($cate)->name;

        if ($cate == '3') {
            $plans = Post::with('category','author')
                        ->where('category_id', $cate)
                        ->where('group_id', 31)
                        ->orderBy('publish_up', 'DESC')
                        ->orderBy('id', 'DESC')
                        ->paginate($limit);

            $results = Post::with('category','author')
                        ->where('category_id', $cate)
                        ->where('group_id', 32)
                        ->orderBy('publish_up', 'DESC')
                        ->orderBy('id', 'DESC')
                        ->paginate($limit);

            $reports = Post::with('category','author')
                        ->where('category_id', $cate)
                        ->where('group_id', 34)
                        ->orderBy('publish_up', 'DESC')
                        ->orderBy('id', 'DESC')
                        ->paginate($limit);

            $procures = Post::with('category','author')
                        ->where('category_id', $cate)
                        ->where('group_id', 35)
                        ->orderBy('publish_up', 'DESC')
                        ->orderBy('id', 'DESC')
                        ->paginate($limit);

            $winners = Post::with('category','author')
                        ->where('category_id', $cate)
                        ->where('group_id', 33)
                        ->orderBy('publish_up', 'DESC')
                        ->orderBy('id', 'DESC')
                        ->paginate($limit);

            $tors = Post::with('category','author')
                        ->where('category_id', $cate)
                        ->where('group_id', 36)
                        ->orderBy('publish_up', 'DESC')
                        ->orderBy('id', 'DESC')
                        ->paginate($limit);

            return view('news.list', compact('title', 'plans', 'results', 'reports', 'procures', 'winners', 'tors', 'cate'));
        } else {
            $posts = Post::with('category','author')
                        ->when(!empty($cate), function($q) use ($cate) {
                            $q->where('category_id', $cate);
                        })
                        ->orderBy('publish_up', 'DESC')
                        ->orderBy('id', 'DESC')
                        ->paginate($limit);

            return view('post.list', compact('title', 'posts', 'cate'));
        }
    }

    public function search(Request $req)
    {
        /** Get params from query string */
        $cate = $req->get('cate');
        // $type = $req->get('type');
        // $group = $req->get('group');
        // $name = $req->get('name');
        $limit = !empty($req->get('limit')) ? $req->get('limit') : 10;

        $posts = Post::with('category','author')
                    // ->when(!empty($type), function($q) use ($type) {
                    //     $q->where('plan_type_id', $type);
                    // })
                    ->when(!empty($cate), function($q) use ($cate) {
                        $q->where('category_id', $cate);
                    })
                    // ->when(!empty($group), function($q) use ($group) {
                    //     $q->where('group_id', $group);
                    // })
                    // ->when(!empty($name), function($q) use ($name) {
                    //     $q->where(function($query) use ($name) {
                    //         $query->where('item_name', 'like', '%'.$name.'%');
                    //         $query->orWhere('en_name', 'like', '%'.$name.'%');
                    //     });
                    // })
                    ->orderBy('publish_up', 'DESC')
                    ->orderBy('id', 'DESC')
                    ->paginate($limit);

        return $posts;
    }

    public function getAll(Request $req)
    {
        /** Get params from query string */
        // $type = $req->get('type');

        $posts = Post::with('category','author')
                    // ->when(!empty($type), function($q) use ($type) {
                    //     $q->where('type_id', $type);
                    // })
                    ->when(!empty($cate), function($q) use ($cate) {
                        $q->where('category_id', $cate);
                    })
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
                    ->get();

        return $posts;
    }

    public function getById($id)
    {
        $post =  Post::with('category','author')->find($id);

        return $post;
    }
}
