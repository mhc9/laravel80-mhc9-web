<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;
use Illuminate\Support\MessageBag;
use App\Models\Division;
use App\Models\Department;

class DivisionController extends Controller
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
        // $department  = $req->get('department');
        // $name        = $req->get('name');
        // $status      = $req->get('status');

        // $departments = Division::with('department')
        //             ->when(!empty($department), function($q) use ($department) {
        //                 $q->where('plan_department_id', $department);
        //             })
        //             ->when($status != '', function($q) use ($status) {
        //                 $q->where('status', $status);
        //             })
        //             ->when(!empty($name), function($q) use ($name) {
        //                 $q->where(function($query) use ($name) {
        //                     $query->where('name', 'like', '%'.$name.'%');
        //                     $query->orWhere('name', 'like', '%'.$name.'%');
        //                 });
        //             })
        //             ->paginate(10);

        // return $departments;
    }

    public function getAll(Request $req)
    {
        /** Get params from query string */
        $department = $req->get('department');
        $status     = $req->get('status');

        $departments = Division::with('department')
                    ->when(!empty($department), function($q) use ($department) {
                        $q->where('department_id', $department);
                    })
                    ->when($status != '', function($q) use ($status) {
                        $q->where('status', $status);
                    })
                    ->paginate(10);

        return $departments;
    }

    public function getById($id)
    {
        return Division::with('department')->find($id);
    }

    public function getInitialFormData()
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
            $division = Division::find($id);

            if($division->delete()) {
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
