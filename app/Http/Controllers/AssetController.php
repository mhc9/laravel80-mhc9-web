<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;
use Illuminate\Support\MessageBag;
use App\Models\Asset;
use App\Models\AssetType;
use App\Models\AssetCategory;
use App\Models\Unit;
use App\Models\Brand;
use App\Models\Budget;
use App\Models\ObtainingType;
use App\Models\Employee;

class AssetController extends Controller
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
        // $type = $req->get('type');
        // $category = $req->get('category');
        // $name = $req->get('name');
        // $status = $req->get('status');

        // $assets = Asset::with('type','category')
        //             ->when(!empty($type), function($q) use ($type) {
        //                 $q->where('asset_type_id', $type);
        //             })
        //             ->when(!empty($category), function($q) use ($category) {
        //                 $q->where('asset_category_id', $category);
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

        // return $assets;
    }

    public function getAll(Request $req)
    {
        /** Get params from query string */
        $type = $req->get('type');
        $category = $req->get('category');

        $assets = Asset::with('type','category','brand','budget', 'obtaining','unit')
                    ->when(!empty($type), function($q) use ($type) {
                        $q->where('asset_type_id', $type);
                    })
                    // ->when(!empty($category), function($q) use ($category) {
                    //     $q->where('asset_category_id', $category);
                    // })
                    // ->when($status != '', function($q) use ($status) {
                    //     $q->where('status', $status);
                    // })
                    ->paginate(10);

        return $assets;
    }

    public function getById($id)
    {
        return Asset::with('type','category','brand','budget', 'obtaining','unit')->find($id);
    }

    public function getFormInitialData()
    {
        return [
            'types'         => AssetType::all(),
            'categories'    => AssetCategory::all(),
            'units'         => Unit::all(),
            'brands'        => Brand::all(),
            'budgets'       => Budget::all(),
            'obtainingTypes' => ObtainingType::all(),
            'employees'     => Employee::whereIn('status', [1,2])->get(),
        ];
    }

    public function store(Request $req)
    {
        try {
            $asset = new Asset();
            $asset->asset_no            = $req['asset_no'];
            $asset->name                = $req['name'];
            $asset->description         = $req['description'];
            $asset->asset_type_id       = $req['asset_type_id'];
            $asset->asset_category_id   = $req['asset_category_id'];
            $asset->price_per_unit      = $req['price_per_unit'];
            $asset->unit_id             = $req['unit_id'];
            $asset->brand_id            = $req['brand_id'];
            $asset->model               = $req['model'];
            $asset->purchased_at        = $req['purchased_at'];
            $asset->date_in             = $req['date_in'];
            $asset->first_year          = $req['first_year'];
            $asset->obtain_type_id      = $req['obtain_type_id'];
            $asset->budget_id           = $req['budget_id'];
            $asset->status              = $req['status'];
            $asset->remark              = $req['remark'];

            if($asset->save()) {
                return [
                    'status'    => 1,
                    'message'   => 'Insertion successfully!!',
                    'asset'     => $asset
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
            $asset = Asset::find($id);
            $asset->asset_no            = $req['asset_no'];
            $asset->name                = $req['name'];
            $asset->description         = $req['description'];
            $asset->asset_type_id       = $req['asset_type_id'];
            $asset->asset_category_id   = $req['asset_category_id'];
            $asset->price_per_unit      = $req['price_per_unit'];
            $asset->unit_id             = $req['unit_id'];
            $asset->brand_id            = $req['brand_id'];
            $asset->model               = $req['model'];
            $asset->purchased_at        = $req['purchased_at'];
            $asset->date_in             = $req['date_in'];
            $asset->first_year          = $req['first_year'];
            $asset->obtain_type_id      = $req['obtain_type_id'];
            $asset->budget_id           = $req['budget_id'];
            $asset->status              = $req['status'];
            $asset->remark              = $req['remark'];

            if($asset->save()) {
                return [
                    'status'    => 1,
                    'message'   => 'Updating successfully!!',
                    'asset'     => $asset
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

    public function delete(Request $req, $id)
    {
        try {
            $asset = Asset::find($id);

            if($asset->delete()) {
                return [
                    'status'     => 1,
                    'message'    => 'Deleting successfully!!',
                    'id'         => $id
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
