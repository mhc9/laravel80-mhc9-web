<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;
use Illuminate\Support\MessageBag;
// use App\Services\PostService;
use App\Models\Question;

class QuestionController extends Controller
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

    public function addQuestion()
    {
        return view('q&a.question', [
            'attributes' => [
                'data-theme' => 'dark',
                'data-type' => 'audio',
            ],
        ]);
    }

    public function store(Request $req)
    {
        $rules = [
            'question_type_id' => 'required', // |exists:question_types,id
            'title' => 'required|string|max:255',
            'full_name' => 'required|string',
            'email' => 'required|email|max:255',
            'description' => 'required|string',
            'g-recaptcha-response' => 'required|captcha',
        ];

        $messages = [
            'question_type_id.required' => 'กรุณาเลือกประเภทคำถาม',
            // 'question_type_id.exists' => 'ประเภทคำถามไม่ถูกต้อง',
            'title.required' => 'กรุณากรอกคำถาม',
            'title.string' => 'คำถามต้องเป็นตัวอักษร',
            'title.max' => 'คำถามต้องไม่เกิน 255 ตัวอักษร',
            'full_name.required' => 'กรุณากรอกชื่อ-นามสกุล',
            'full_name.string' => 'ชื่อ-นามสกุลต้องเป็นตัวอักษร',
            'email.required' => 'กรุณากรอก Email',
            'email.email' => 'รูปแบบ Email ไม่ถูกต้อง',
            'email.max' => 'Email ต้องไม่เกิน 255 ตัวอักษร',
            'description.required' => 'กรุณากรอกรายละเอียด',
            'description.string' => 'รายละเอียดต้องเป็นตัวอักษร',
            // 'description.max' => 'รายละเอียดต้องไม่เกิน 1000 ตัวอักษร',
            'g-recaptcha-response.required' => 'กรุณายืนยันตัวตน',
            'g-recaptcha-response.captcha' => 'การยืนยันตัวตนไม่ถูกต้อง',
        ];

        $validator = \Validator::make($req->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect('/q&a/question')
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = [
            'title' => $req->input('title'),
            'description' => $req->input('description'),
            'question_type_id' => $req->input('question_type_id'),
            'question_date' => date('Y-m-d'),
            'full_name' => $req->input('full_name'),
            'email' => $req->input('email'),
            'file_path' => '',
            // 'file_name' => '',
            'file_mime' => '',
            // 'file_size' => 0,
            'ip_address' => $req->ip(),
            'user_agent' => $req->header('User-Agent'),
            // 'created_by' => Auth::check() ? Auth::user()->id : null,
            'published' => 0,
            'status' => 'new',
        ];

        if ($req->hasFile('file_attach')) {
            $file = $req->file('file_attach');
            $path = $file->store('public/questions');
            $data['file_path'] = $path;
            // $data['file_name'] = $file->getClientOriginalName();
            $data['file_mime'] = $file->getClientMimeType();
            // $data['file_size'] = $file->getSize();
        }

        dd($data);
    }
}
