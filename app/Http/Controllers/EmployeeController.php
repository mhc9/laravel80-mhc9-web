<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;
use Illuminate\Support\MessageBag;
use App\Models\Employee;
use App\Models\Prefix;
use App\Models\Position;
use App\Models\Level;

class EmployeeController extends Controller
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
        $position   = $req->get('position');
        $level      = $req->get('level');
        $name       = $req->get('name');

        $employees = Employee::with('prefix','position','level')
                    ->when(!empty($position), function($q) use ($position) {
                        $q->where('position_id', $position);
                    })
                    ->when(!empty($level), function($q) use ($level) {
                        $q->where('level_id', $level);
                    })
                    ->when(!empty($name), function($q) use ($name) {
                        $q->where('firstname', 'like', '%'.$name.'%');
                    })
                    // ->when($status != '', function($q) use ($status) {
                    //     $q->where('status', $status);
                    // })
                    ->paginate(10);

        return $employees;
    }

    public function getAll(Request $req)
    {
        /** Get params from query string */
        $position = $req->get('position');
        $level = $req->get('level');

        $employees = Employee::with('prefix','position','level')
                    ->when(!empty($position), function($q) use ($position) {
                        $q->where('position_id', $position);
                    })
                    ->when(!empty($level), function($q) use ($level) {
                        $q->where('level_id', $level);
                    })
                    // ->when($status != '', function($q) use ($status) {
                    //     $q->where('status', $status);
                    // })
                    ->get();

        return $employees;
    }

    public function getById($id)
    {
        return Employee::with('prefix','position','level')->find($id);
    }

    public function getFormInitialData()
    {
        return [
            'prefixes'  => Prefix::all(),
            'positions' => Position::all(),
            'levels'    => Level::all(),
        ];
    }

    public function store(Request $req)
    {
        try {
            $employee = new Employee();
            $employee->employee_no  = $req['employee_no'];
            $employee->prefix_id    = $req['prefix_id'];
            $employee->firstname    = $req['firstname'];
            $employee->lastname     = $req['lastname'];
            $employee->cid          = $req['cid'];
            $employee->sex          = $req['sex'];
            $employee->birthdate    = $req['birthdate'];
            $employee->tel          = $req['tel'];
            $employee->email        = $req['email'];
            $employee->line_id      = $req['line_id'];
            $employee->position_id  = $req['position_id'];
            $employee->level_id     = $req['level_id'];
            $employee->started_at   = $req['started_at'];
            $employee->status       = 1;
            $employee->remark       = $req['remark'];

            if($employee->save()) {
                return [
                    'status'    => 1,
                    'message'   => 'Insertion successfully!!',
                    'employee'  => $employee
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
            // $item = Item::find($id);
            // $item->plan_type_id = $req['plan_type_id'];
            // $item->category_id  = $req['category_id'];
            // $item->group_id     = $req['group_id'];
            // $item->asset_no     = $req['asset_no'];
            // $item->item_name    = $req['item_name'];
            // $item->en_name      = $req['en_name'];
            // $item->price_per_unit = currencyToNumber($req['price_per_unit']);
            // $item->unit_id      = $req['unit_id'];
            // $item->in_stock     = $req['in_stock'];
            // $item->calc_method  = $req['calc_method'];
            // $item->have_subitem = $req['have_subitem'];
            // $item->is_fixcost   = $req['is_fixcost'];
            // $item->is_repairing_item = $req['is_repairing_item'];
            // $item->is_addon     = $req['is_addon'];
            // $item->first_year   = $req['first_year'];
            // $item->remark       = $req['remark'];

            // if($item->save()) {
            //     return [
            //         'status'    => 1,
            //         'message'   => 'Updating successfully!!',
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
