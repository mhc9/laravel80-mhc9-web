<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;
use Illuminate\Support\MessageBag;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function formValidate (Request $request)
    {
        $rules = [
            'name' => 'required',
        ];

        $messages = [
            'name.required'     => 'กรุณาระบุชื่อกลุ่มงาน',
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

        // $departments = Department::when($status != '', function($q) use ($status) {
        //                 $q->where('status', $status);
        //             })
        //             ->when(!empty($name), function($q) use ($name) {
        //                 $q->where(function($query) use ($name) {
        //                     $query->where('item_name', 'like', '%'.$name.'%');
        //                     $query->orWhere('en_name', 'like', '%'.$name.'%');
        //                 });
        //             })
        //             ->paginate(10);

        // return $departments;
    }

    public function getAll(Request $req)
    {
        /** Get params from query string */
        $name   = $req->get('name');
        $status = $req->get('status');

        $departments = Department::when($status != '', function($q) use ($status) {
                        $q->where('status', $status);
                    })
                    ->paginate(10);

        return $departments;
    }

    public function getById($id)
    {
        return Department::find($id);
    }

    public function store(Request $req)
    {
        try {
            $department = new Department();
            $department->name   = $req['name'];
            $department->status = $req['status'] ? 1 : 0;

            if($department->save()) {
                return [
                    'status'        => 1,
                    'message'       => 'Insertion successfully!!',
                    'department'    => $department
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
            $department = Department::find($id);
            $department->name   = $req['name'];
            $department->status = $req['status'] ? 1 : 0;

            if($department->save()) {
                return [
                    'status'        => 1,
                    'message'       => 'Updating successfully!!',
                    'department'    => $department
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
            $department = Department::find($id);

            if($department->delete()) {
                return [
                    'status'    => 1,
                    'message'   => 'Deleting successfully!!'
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
