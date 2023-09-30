<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;
use Illuminate\Support\MessageBag;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Division;
use App\Models\Department;

class OrderController extends Controller
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
        $department = $req->get('department');
        $status     = $req->get('status');

        $orders = Order::with('details','details.item','details.unit','requisition')
                        ->with('purchaser','division','division.department','supplier')
                        // ->when(!empty($department), function($q) use ($department) {
                        //     $q->where('department_id', $department);
                        // })
                        // ->when($status != '', function($q) use ($status) {
                        //     $q->where('status', $status);
                        // })
                        ->paginate(10);

        return $orders;
    }

    public function getAll(Request $req)
    {
        /** Get params from query string */
        $department = $req->get('department');
        $status     = $req->get('status');

        $orders = Order::with('details','details.item','details.unit','requisition')
                        ->with('purchaser','division','division.department','supplier')
                        // ->when(!empty($department), function($q) use ($department) {
                        //     $q->where('department_id', $department);
                        // })
                        // ->when($status != '', function($q) use ($status) {
                        //     $q->where('status', $status);
                        // })
                        ->paginate(10);

        return $orders;
    }

    public function getById($id)
    {
        $order = Order::with('details','details.item','details.unit','requisition')
                        ->with('purchaser','division','division.department','supplier')
                        // ->when(!empty($department), function($q) use ($department) {
                        //     $q->where('department_id', $department);
                        // })
                        // ->when($status != '', function($q) use ($status) {
                        //     $q->where('status', $status);
                        // })
                        ->find($id);

        return $order;
    }

    public function getFormInitialData()
    {
        return [
            'departments' => Department::all(),
        ];
    }

    public function store(Request $req)
    {
        try {
            $division = new Division();
            $division->name             = $req['name'];
            $division->department_id    = $req['department_id'];
            $division->status           = $req['status'] ? 1 : 0;

            if($division->save()) {
                return [
                    'status'    => 1,
                    'message'   => 'Insertion successfully!!',
                    'division'  => $division
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
            $division = Division::find($id);
            $division->name             = $req['name'];
            $division->department_id    = $req['department_id'];
            $division->status           = $req['status'] ? 1 : 0;

            if($division->save()) {
                return [
                    'status'    => 1,
                    'message'   => 'Updating successfully!!',
                    'division'  => $division
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
