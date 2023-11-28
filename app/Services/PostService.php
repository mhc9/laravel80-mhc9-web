<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\WebPost;

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

    public function uploadFile(Request $req)
    {
        if ($req->hasFile('featured')) {
            $file = $req->file('featured');
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
}