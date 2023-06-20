<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;
use Illuminate\Support\MessageBag;
use App\Models\Room;

class RoomController extends Controller
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
        // $name = $req->get('name');
        // $status = $req->get('status');

        // $rooms = Room::with('type','group')
        //             ->when(!empty($type), function($q) use ($type) {
        //                 $q->where('plan_type_id', $type);
        //             })
        //             ->when(!empty($group), function($q) use ($group) {
        //                 $q->where('group_id', $group);
        //             })
        //             ->when($status != '', function($q) use ($status) {
        //                 $q->where('status', $status);
        //             })
        //             ->when(!empty($name), function($q) use ($name) {
        //                 $q->where(function($query) use ($name) {
        //                     $query->where('item_name', 'like', '%'.$name.'%');
        //                     $query->orWhere('en_name', 'like', '%'.$name.'%');
        //                 });
        //             })
        //             ->paginate(10);

        // return $rooms;
    }

    public function getAll(Request $req)
    {
        /** Get params from query string */
        $name = $req->get('name');
        $status = $req->get('status');

        $rooms = Room::when($status != '', function($q) use ($status) {
                        $q->where('status', $status);
                    })
                    ->when(!empty($name), function($q) use ($name) {
                        $q->where('name', 'like', '%'.$name.'%');
                    })
                    ->paginate(10);

        return $rooms;
    }

    public function getById($id)
    {
        return Room::find($id);
    }

    public function store(Request $req)
    {
        try {
            $room = new Room();
            $room->name      = $req['name'];
            $room->status    = $req['status'] ? 1 : 0;

            if($room->save()) {
                return [
                    'status'    => 1,
                    'message'   => 'Insertion successfully!!',
                    'room'      => $room
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
            $room = Room::find($id);
            $room->name     = $req['name'];
            $room->status   = $req['status'] ? 1 : 0;

            if($room->save()) {
                return [
                    'status'    => 1,
                    'message'   => 'Updating successfully!!',
                    'room'      => $room
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
            $room = Room::find($id);

            if($room->delete()) {
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
