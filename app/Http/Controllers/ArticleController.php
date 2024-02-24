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

class ArticleController extends Controller
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

    public function getArticles(Request $req)
    {
        $limit  = !empty($req->get('limit')) ? $req->get('limit') : 8;

        $posts = Post::with('category','author')
                    ->where('category_id', 6)
                    ->orderBy('publish_up', 'DESC')
                    ->orderBy('id', 'DESC')
                    ->paginate($limit);

        $title = 'บทความสุขภาพจิต';

        return view('article.list', compact('title', 'posts'));
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

    public function getInitialFormData()
    {
        return [
            'categories'    => PostCategory::all(),
            'authors'       => User::all(),
        ];
    }

    public function store(Request $req)
    {
        try {
            $post = $this->postService->createPost($req);

            if($post->save()) {
                return [
                    'status'    => 1,
                    'message'   => 'Insertion successfully!!',
                    'post'      => $post->load(['category','author'])
                ];
            } else {
                return [
                    'status'    => 0,
                    'message'   => 'Something went wrong!!'
                ];
            }
        } catch (\Exception $ex) {
            return [
                'status'    => 0,
                'message'   => $ex->getMessage()
            ];
        }
    }

    public function update(Request $req, $id)
    {
        try {
            $post = $this->postService->updatePost($req, $id);

            if($post->save()) {
                return [
                    'status'    => 1,
                    'message'   => 'Updating successfully!!',
                    'post'      => $post->load(['category','author'])
                ];
            } else {
                return [
                    'status'    => 0,
                    'message'   => 'Something went wrong!!'
                ];
            }
        } catch (\Exception $ex) {
            return [
                'status'    => 0,
                'message'   => $ex->getMessage()
            ];
        }
    }

    public function destroy(Request $req, $id)
    {
        try {
            /** Get data from deleting post */
            $post = $this->postService->getPost($id);

            if($this->postService->deletePost($id)) {
                // Remove files of featured image
                if (!empty($post->featured)) {
                    $this->postService->removeFile($post->featured);
                }

                // Remove pdf file of urls
                if ($post->content_type_id == 2 && !empty($post->urls)) {
                    /** Get path of file */
                    $filePath = substr($post->urls, strpos($post->urls, '/uploads/'));

                    $this->postService->removeFile($filePath);
                }

                return [
                    'status'    => 1,
                    'message'   => 'Deleting successfully!!',
                    'id'        => $id
                ];
            } else {
                return [
                    'status'    => 0,
                    'message'   => 'Something went wrong!!'
                ];
            }
        } catch (\Exception $ex) {
            return [
                'status'    => 0,
                'message'   => $ex->getMessage()
            ];
        }
    }
}
