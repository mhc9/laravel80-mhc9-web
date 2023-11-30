<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Post;

class PostService
{
    /**
    * Create a new PostService instance.
    *
    * @return void
    */
    public function __construct()
    {
        //
    }

    public function uploadFile(Request $req, $fieldName)
    {
        if ($req->hasFile($fieldName)) {
            $file = $req->file($fieldName);
            $fileName = date('mdYHis') . uniqid(). '.' .$file->getClientOriginalExtension();
            $destinationPath = 'uploads/'.date('Y').'/'.date('m').'/';

            if ($filePath = $file->move($destinationPath, $fileName)) {
                return [
                    'fileName' => $fileName,
                    'filePath' => $filePath,
                ];
            }

            return NULL;
        }
    }

    public function createPost(Request $req)
    {
        $post = new Post();
        $post->title            = $req['title'];
        $post->alias            = $req['alias'];
        $post->intro_text       = $req['intro_text'];
        $post->full_text        = $req['full_text'];
        $post->content_type_id  = $req['content_type_id'];
        $post->category_id      = $req['category_id'];
        $post->author_id        = $req['author_id'];
        $post->publish_up       = $req['publish_up'];
        $post->publish_down     = $req['publish_down'];
        $post->urls             = $req['urls'];
        $post->hits             = $req['hits'];
        $post->tags             = $req['tags'];
        $post->ordering         = $req['ordering'];
        $post->status           = 1;
        $post->created_by       = $req['created_by'];
        $post->updated_by       = $req['updated_by'];

        $featured = $this->uploadFile($req, 'featured');
        $post->featured = $featured ? $featured['filePath'] : '';

        $pdf = $this->uploadFile($req, 'pdf');
        $post->urls = $pdf ? env('APP_URL') .'/'. $pdf['filePath'] : '';

        return $post;
    }

    public function updatePost(Request $req, $id)
    {
        $post = Post::find($id);
        $post->title         = $req['title'];
        $post->category_id   = $req['category_id'];
        $post->alias         = $req['alias'];
        $post->intro_text    = $req['intro_text'];
        $post->full_text     = $req['full_text'];
        $post->publish_up    = $req['publish_up'];
        $post->publish_down  = $req['publish_down'];
        $post->urls          = $req['urls'];
        $post->hits          = $req['hits'];
        $post->featured      = $req['featured'];
        $post->ordering      = $req['ordering'];
        $post->updated_by    = $req['updated_by'];

        return $post;
    }

    public function deletePost($id) {
        $post = Post::find($id);

        return $post->delete();
    }
}