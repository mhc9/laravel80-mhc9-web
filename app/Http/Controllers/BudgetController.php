<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;
use Illuminate\Support\MessageBag;
use App\Models\Budget;

class BudgetController extends Controller
{
    public function formValidate (Request $request)
    {
        $rules = [
            'name'          => 'required',
            'project_id'    => 'required',
            'unit_id'       => 'required',
        ];

        if ($request['is_addon'] != '1') {
            $rules['category_id']       = 'required';
            $rules['price_per_unit']    = 'required';
        }

        $messages = [
            'name.required'             => 'กรุณาระบุชื่อสินค้า/บริการ',
            'project_id.required'       => 'กรุณาเลือกประเภทแผน',
            'category_id.required'      => 'กรุณาเลือกประเภทสินค้า/บริการ',
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
        $project    = $req->get('project');
        $plan       = $req->get('plan');
        $name       = $req->get('name');
        $status     = $req->get('status');

        $activities = Budget::with('type','project','project.plan')
                    ->when(!empty($project), function($q) use ($project) {
                        $q->where('project_id', $project);
                    })
                    ->when(!empty($plan), function($q) use ($plan) {
                        $q->whereHas('project.plan', function($sq) use ($plan) {
                            $sq->where('plan_id', $plan);
                        });
                    })
                    // ->when($status != '', function($q) use ($status) {
                    //     $q->where('status', $status);
                    // })
                    // ->when(!empty($name), function($q) use ($name) {
                    //     $q->where(function($query) use ($name) {
                    //         $query->where('item_name', 'like', '%'.$name.'%');
                    //         $query->orWhere('en_name', 'like', '%'.$name.'%');
                    //     });
                    // })
                    ->paginate(10);

        return $activities;
    }

    public function getAll(Request $req)
    {
        /** Get params from query string */
        $project    = $req->get('project');
        $plan       = $req->get('plan');
        $name       = $req->get('name');
        $status     = $req->get('status');

        $activities = Budget::with('type','project','project.plan')
                    ->when(!empty($project), function($q) use ($project) {
                        $q->where('project_id', $project);
                    })
                    ->when(!empty($plan), function($q) use ($plan) {
                        $q->whereHas('project.plan', function($sq) use ($plan) {
                            $sq->where('plan_id', $plan);
                        });
                    })
                    // ->when($status != '', function($q) use ($status) {
                    //     $q->where('status', $status);
                    // })
                    // ->when(!empty($name), function($q) use ($name) {
                    //     $q->where('name', 'like', '%'.$name.'%');
                    // })
                    ->get();

        return $activities;
    }

    public function getById($id)
    {
        return Budget::find($id);
    }

    public function store(Request $req)
    {
        try {
            $budget = new Budget();
            $budget->name      = $req['name'];
            $budget->status    = $req['status'] ? 1 : 0;

            if($budget->save()) {
                return [
                    'status'    => 1,
                    'message'   => 'Insertion successfully!!',
                    'Budget'  => $budget
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
            $budget = Budget::find($id);
            $budget->name     = $req['name'];
            $budget->status   = $req['status'] ? 1 : 0;

            if($budget->save()) {
                return [
                    'status'    => 1,
                    'message'   => 'Updating successfully!!',
                    'Budget'  => $budget
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
            $budget = Budget::find($id);

            if($budget->delete()) {
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
