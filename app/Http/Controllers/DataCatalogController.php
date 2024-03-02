<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;
use Illuminate\Support\MessageBag;
use App\Models\AssetType;

class DataCatalogController extends Controller
{
    public function index()
    {
        return view('data-catalog.index');
    }

    public function detail($file)
    {
        $csvFileName = $file . ".csv";
        $csvFile = public_path('uploads/data-catalog/' . $csvFileName);
        $data = readCSV($csvFile);

        $header = reset($data);
        array_shift($data);

        return view('data-catalog.detail', compact('header', 'data'));
    }

    public function search(Request $req)
    {
        /** Get params from query string */
        // $type = $req->get('type');
        // $group = $req->get('group');
        // $name = $req->get('name');
        // $status = $req->get('status');

        // $types = AssetType::with('type','group')
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

        // return $types;
    }

    public function getAll(Request $req)
    {
        /** Get params from query string */
        $name = $req->get('name');
        $status = $req->get('status');

        $types = AssetType::when($status != '', function($q) use ($status) {
                        $q->where('status', $status);
                    })
                    ->when(!empty($name), function($q) use ($name) {
                        $q->where('name', 'like', '%'.$name.'%');
                    })
                    ->paginate(10);

        return $types;
    }

    public function store(Request $req)
    {
        // try {
        //     $type = new AssetType();
        //     $type->name      = $req['name'];
        //     $type->status    = $req['status'] ? 1 : 0;

        //     if($type->save()) {
        //         return [
        //             'status'    => 1,
        //             'message'   => 'Insertion successfully!!',
        //             'type'      => $type
        //         ];
        //     } else {
        //         return [
        //             'status'    => 0,
        //             'message'   => 'Something went wrong!!'
        //         ];
        //     }
        // } catch (\Exception $ex) {
        //     return [
        //         'status'    => 0,
        //         'message'   => $ex->getMessage()
        //     ];
        // }
    }

    public function update(Request $req, $id)
    {
        // try {
        //     $type = AssetType::find($id);
        //     $type->name     = $req['name'];
        //     $type->status   = $req['status'] ? 1 : 0;

        //     if($type->save()) {
        //         return [
        //             'status'    => 1,
        //             'message'   => 'Updating successfully!!',
        //             'type'      => $type
        //         ];
        //     } else {
        //         return [
        //             'status'    => 0,
        //             'message'   => 'Something went wrong!!'
        //         ];
        //     }
        // } catch (\Exception $ex) {
        //     return [
        //         'status'    => 0,
        //         'message'   => $ex->getMessage()
        //     ];
        // }
    }

    public function destroy(Request $req, $id)
    {
        // try {
        //     $type = AssetType::find($id);

        //     if($type->delete()) {
        //         return [
        //             'status'    => 1,
        //             'message'   => 'Deleting successfully!!',
        //             'id'        => $id
        //         ];
        //     } else {
        //         return [
        //             'status'    => 0,
        //             'message'   => 'Something went wrong!!'
        //         ];
        //     }
        // } catch (\Exception $ex) {
        //     return [
        //         'status'    => 0,
        //         'message'   => $ex->getMessage()
        //     ];
        // }
    }
}
