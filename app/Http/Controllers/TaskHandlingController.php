<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;
use Illuminate\Support\MessageBag;
use App\Models\TaskHandling;
use App\Models\Task;
use App\Models\TaskType;
use App\Models\TaskGroup;
use App\Models\TaskAsset;
use App\Models\Employee;

class TaskHandlingController extends Controller
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

    private function getEmployeeList($fname, $lname)
    {
        return Employee::where('firstname', 'like', '%'.$fname.'%')
                    ->when(!empty($lname), function($q) use ($lname) {
                        $q->where('lastname', 'like', '%'.$lname.'%');
                    })
                    ->pluck('id');
    }

    private function getGroupListOfType($type)
    {
        return TaskGroup::where('task_type_id', $type)->pluck('id');
    }

    public function search(Request $req)
    {
        /** Get params from query string */
        $date       = $req->get('date');
        $type       = $req->get('type');
        // $group      = $req->get('group');
        $reporter   = $req->get('reporter');
        $status     = $req->get('status');

        $reporterList = $this->getEmployeeList($reporter, '');
        $groupList = $this->getGroupListOfType($type);

        $tasks = TaskHandling::with('group','group.type','assets','assets.asset','reporter')
                    ->with('reporter.prefix','reporter.position','reporter.level')
                    ->when(!empty($date), function($q) use ($date) {
                        $q->where('task_date', $date);
                    })
                    ->when(!empty($reporter), function($q) use ($reporterList) {
                        $q->whereIn('reporter_id', $reporterList);
                    })
                    ->when(!empty($type), function($q) use ($groupList) {
                        $q->whereIn('task_group_id', $groupList);
                    })
                    // ->when(!empty($group), function($q) use ($group) {
                    //     $q->where('task_group_id', $group);
                    // })
                    ->when(!empty($status), function($q) use ($status) {
                        $q->where('status', $status);
                    })
                    ->orderBy('task_date', 'desc')
                    ->orderBy('task_time', 'desc')
                    ->paginate(10);

        return $tasks;
    }

    public function getAll(Request $req)
    {
        /** Get params from query string */
        $group      = $req->get('group');
        $type       = $req->get('type');
        $reporter   = $req->get('reporter');
        $status     = $req->get('status');

        $tasks = Task::with('group','group.type','reporter','assets','assets.asset')
                    ->when(!empty($type), function($q) use ($type) {
                        $q->where('task_type_id', $type);
                    })
                    ->when(!empty($group), function($q) use ($group) {
                        $q->where('task_group_id', $group);
                    })
                    // ->when($status != '', function($q) use ($status) {
                    //     $q->where('status', $status);
                    // })
                    ->get();

        return $tasks;
    }

    public function getById($id)
    {
        return Task::with('group','group.type','assets','assets.asset','assets.asset.category','assets.asset.brand')
                    ->with('reporter','reporter.prefix','reporter.position','reporter.level')
                    ->find($id);
    }

    public function getInitialFormData()
    {
        $causes = [
            '1' => 'เกิดจากบุคคล',
            '2' => 'เกิดจากเครื่อง/อุปกรณ์',
            '3' => 'เกิดจากโปรแกรม/ข้อมูล',
            '4' => 'เกิดจากสัตว์',
            '5' => 'เกิดจากการตั้งค่า',
            '6' => 'เกิดจากเงื่อนไข/บุคคล',
            '7' => 'เกิดจากสาเหตุภายนอก',
            '8' => 'ต้องการเพิ่มเติม',
        ];

        $statuses = [
            '1' => 'รอดำเนินการ',
            '2' => 'กำลังดำเนินการ',
            '3' => 'สั่งซื้ออะไหล่',
            '4' => 'ส่งซ่อมภายนอก',
            '5' => 'เสร็จแล้ว',
            '9' => 'ยกเลิก',
        ];

        return [
            'types'     => TaskType::all(),
            'causes'    => $causes,
            'statuses'  => $statuses
        ];
    }

    public function store(Request $req)
    {
        try {
            $handle = new TaskHandling();
            $handle->handle_date    = $req['handle_date'];
            $handle->handle_time    = $req['handle_time'];
            $handle->task_id        = $req['task_id'];
            $handle->handler_id     = $req['handler_id'];
            $handle->description    = $req['description'];
            $handle->cause_id       = $req['cause_id'];
            $handle->handle_type_id = $req['handle_type_id'];
            $handle->cause_text     = $req['cause_text'];

            if($handle->save()) {
                /** Update task's status */
                Task::where('id', $req['task_id'])->update(['status' => $req['status']]);

                return [
                    'status'    => 1,
                    'message'   => 'Insertion successfully!!',
                    'handle'    => $handle
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
