<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;
use Illuminate\Support\MessageBag;
use App\Models\Item;
use App\Models\AssetType;
use App\Models\AssetCategory;
use App\Models\Unit;

class ItemController extends Controller
{
    public function formValidate (Request $request)
    {
        $rules = [
            'name'          => 'required',
            'department_id' => 'required',
        ];

        $messages = [
            'name.required'             => 'กรุณาระบุชื่องาน',
            'department_id.required'    => 'กรุณาเลือกกลุ่มงาน',
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
        $category   = $req->get('category');
        $name       = $req->get('name');
        $status     = $req->get('status');
        $pageSize   = $req->get('limit') ? $req->get('limit') : 10;

        $items = Item::with('category','unit')
                    ->when(!empty($category), function($q) use ($category) {
                        $q->where('category_id', $category);
                    })
                    ->when(!empty($name), function($q) use ($name) {
                        $q->where('name', 'like', '%'.$name.'%');
                    })
                    ->when($status != '', function($q) use ($status) {
                        $q->where('status', $status);
                    })
                    ->paginate($pageSize);

        return $items;
    }

    public function getAll(Request $req)
    {
        /** Get params from query string */
        $category   = $req->get('category');
        $name       = $req->get('name');
        $status     = $req->get('status');

        $item = Item::with('category','unit')
                    ->when(!empty($category), function($q) use ($category) {
                        $q->where('category_id', $category);
                    })
                    ->when(!empty($name), function($q) use ($name) {
                        $q->where('name', 'like', '%'.$name.'%');
                    })
                    ->when($status != '', function($q) use ($status) {
                        $q->where('status', $status);
                    })
                    ->get();

        return $item;
    }

    public function getById($id)
    {
        return Item::with('category','unit')->find($id);
    }

    public function getInitialFormData()
    {
        $types          = AssetType::with('categories')->get();

        return [
            'types'         => $types,
            'categories'    => AssetCategory::all(),
            'units'         => Unit::all(),
        ];
    }

    public function store(Request $req)
    {
        try {
            $item = new Item();
            $item->name         = $req['name'];
            $item->category_id  = $req['category_id'];
            $item->cost         = $req['cost'];
            $item->price        = $req['price'];
            $item->unit_id      = $req['unit_id'];
            $item->description  = $req['description'];
            // $item->status       = $req['status'] ? 1 : 0;

            if ($req->file('img_url')) {
                $file = $req->file('img_url');
                $fileName = date('mdYHis') . uniqid(). '.' .$file->getClientOriginalExtension();
                $destinationPath = 'uploads/products/thumbnails/';

                if ($file->move($destinationPath, $fileName)) {
                    $item->img_url = $fileName;
                }
            }

            if($item->save()) {
                return [
                    'status'    => 1,
                    'message'   => 'Insertion successfully!!',
                    'item'      => $item
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
            $item = Item::find($id);
            $item->name         = $req['name'];
            $item->category_id  = $req['category_id'];
            $item->cost         = $req['cost'];
            $item->price        = $req['price'];
            $item->unit_id      = $req['unit_id'];
            $item->description  = $req['description'];
            // $item->status       = $req['status'] ? 1 : 0;

            if ($req->file('img_url')) {
                $file = $req->file('img_url');
                $fileName = date('mdYHis') . uniqid(). '.' .$file->getClientOriginalExtension();
                $destinationPath = 'uploads/products/thumbnails/';

                if ($file->move($destinationPath, $fileName)) {
                    $item->img_url = $fileName;
                }
            }

            if($item->save()) {
                return [
                    'status'    => 1,
                    'message'   => 'Updating successfully!!',
                    'item'      => $item
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
            // $item = Item::find($id);

            // if($item->delete()) {
            //     return [
            //         'status'    => 1,
            //         'message'   => 'Deleting successfully!!',
            //         'item'      => $item
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
