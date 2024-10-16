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
        return view('e-report.data-catalog.index');
    }

    public function detail($file, $title)
    {
        $csvFileName = $file . ".csv";
        $csvFile = public_path('uploads/data-catalog/' . $csvFileName);
        $data = readCSV($csvFile);

        $header = reset($data);
        array_shift($data);

        return view('e-report.data-catalog.detail', compact('header','data','title'));
    }
}
