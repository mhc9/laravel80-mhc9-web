<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;
use Illuminate\Support\MessageBag;
use App\Models\WebPost;
use App\Models\WebPostCategory;
use App\Models\User;

class WebPostController extends Controller
{
    public function formValidate (Request $request)
    {
        $rules = [
            'plan_type_id'      => 'required',
            'item_name'         => 'required',
            'unit_id'           => 'required',
        ];

        if ($request['is_addon'] != '1') {
            $rules['category_id'] = 'required';
            $rules['price_per_unit'] = 'required';
        }

        $messages = [
            'plan_type_id.required'     => 'กรุณาเลือกประเภทแผน',
            'category_id.required'        => 'กรุณาเลือกประเภทสินค้า/บริการ',
            'item_name.required'        => 'กรุณาระบุชื่อสินค้า/บริการ',
            'price_per_unit.required'   => 'กรุณาระบุราคาต่อหน่วย',
            'unit_id.required'          => 'กรุณาเลือกหน่วยนับ',
        ];

        $validator = \Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $messageBag = $validator->getMessageBag();

            // if (!$messageBag->has('start_date')) {
            //     if ($this->isDateExistsValidation(convThDateToDbDate($request['start_date']), 'start_date') > 0) {
            //         $messageBag->add('start_date', 'คุณมีการลาในวันที่ระบุแล้ว');
            //     }
            // }

            return [
                'success' => 0,
                'errors' => $messageBag->toArray(),
            ];
        } else {
            return [
                'success' => 1,
                'errors' => $validator->getMessageBag()->toArray(),
            ];
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

        $posts = WebPost::with('category','author')
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
                    ->paginate($limit);

        return $posts;
    }

    public function getAll(Request $req)
    {
        /** Get params from query string */
        // $type = $req->get('type');

        $posts = WebPost::with('category','author')
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
        $post =  WebPost::with('category','author')->find($id);

        return $post;
    }

    public function getInitialFormData()
    {
        return [
            'categories'    => WebPostCategory::all(),
            'authors'       => User::all(),
        ];
    }

    public function store(Request $req)
    {
        try {
            $post = new WebPost();
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
            $post->status           = 1;
            $post->ordering         = $req['ordering'];
            $post->created_by       = $req['created_by'];
            $post->updated_by       = $req['updated_by'];

            /** Upload image */            
            if ($req->file('featured')) {
                $file = $req->file('featured');
                $fileName = date('mdYHis') . uniqid(). '.' .$file->getClientOriginalExtension();
                $destinationPath = 'uploads/'.date('Y').'/'.date('m').'/';

                if ($filePath = $file->move($destinationPath, $fileName)) {
                    $post->featured = $fileName;
                    $post->guid	    = $filePath;
                }
            }

            if($post->save()) {
                return [
                    'status'    => 1,
                    'message'   => 'Insertion successfully!!',
                    'post'      => $post
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
            $post = WebPost::find($id);
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

            if($post->save()) {
                return [
                    'status'    => 1,
                    'message'   => 'Updating successfully!!',
                    'post'      => $post
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
            // $post = WebPost::find($id);

            // if($post->delete()) {
            //     return [
            //         'status'    => 1,
            //         'message'   => 'Deleting successfully!!',
            //         'post'      => $post
            //     ];
            // } else {
            //     return [
            //         'status'    => 0,
            //         'message'   => 'Something went wrong!!'
            //     ];
            // }
        } catch (\Exception $ex) {
            return [
                'status'    => 0,
                'message'   => $ex->getMessage()
            ];
        }
    }
}
