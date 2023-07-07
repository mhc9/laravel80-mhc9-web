<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function() {
    Route::post('register', 'App\Http\Controllers\AuthController@register');
    Route::post('login', 'App\Http\Controllers\AuthController@login')->name('login');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::get('me', 'App\Http\Controllers\AuthController@me');
});

Route::middleware('auth:api')->group(function() {
    Route::get('/tasks/search', 'App\Http\Controllers\TaskController@search');
    Route::get('/tasks', 'App\Http\Controllers\TaskController@getAll');
    Route::get('/tasks/{id}', 'App\Http\Controllers\TaskController@getById');
    Route::get('/tasks/form/init', 'App\Http\Controllers\TaskController@getFormInitialData');
    Route::post('/tasks', 'App\Http\Controllers\TaskController@store');
    Route::put('/tasks/{id}', 'App\Http\Controllers\TaskController@update');
    Route::delete('/tasks/{id}', 'App\Http\Controllers\TaskController@destroy');

    Route::get('/equipments', 'App\Http\Controllers\EquipmentController@getAll');
    Route::get('/equipments/{id}', 'App\Http\Controllers\EquipmentController@getById');
    Route::get('/equipments/form/init', 'App\Http\Controllers\EquipmentController@getFormInitialData');
    Route::post('/equipments', 'App\Http\Controllers\EquipmentController@store');

    Route::get('/equipment-types', 'App\Http\Controllers\EquipmentTypeController@getAll');

    Route::get('/equipment-groups', 'App\Http\Controllers\EquipmentGroupController@getAll');

    Route::get('/assets', 'App\Http\Controllers\AssetController@getAll');
    Route::get('/assets/search', 'App\Http\Controllers\AssetController@search');
    Route::get('/assets/{id}', 'App\Http\Controllers\AssetController@getById');
    Route::get('/assets/form/init', 'App\Http\Controllers\AssetController@getFormInitialData');
    Route::post('/assets', 'App\Http\Controllers\AssetController@store');
    Route::put('/assets/{id}', 'App\Http\Controllers\AssetController@update');
    Route::delete('/assets/{id}', 'App\Http\Controllers\AssetController@destroy');

    Route::get('/asset-ownerships', 'App\Http\Controllers\AssetOwnershipController@getAll');
    Route::get('/asset-ownerships/{id}', 'App\Http\Controllers\AssetOwnershipController@getById');
    Route::get('/asset-ownerships/asset/{id}', 'App\Http\Controllers\AssetOwnershipController@getByAsset');
    Route::get('/asset-ownerships/owner/{id}', 'App\Http\Controllers\AssetOwnershipController@getByOwner');
    Route::get('/asset-ownerships/form/init', 'App\Http\Controllers\AssetOwnershipController@getFormInitialData');
    Route::post('/asset-ownerships', 'App\Http\Controllers\AssetOwnershipController@store');

    Route::get('/asset-types', 'App\Http\Controllers\AssetTypeController@getAll');

    Route::get('/asset-categories', 'App\Http\Controllers\AssetCategoryController@getAll');

    Route::get('/suppliers', 'App\Http\Controllers\SupplierController@getAll');
    Route::get('/suppliers/{id}', 'App\Http\Controllers\SupplierController@getById');
    Route::post('/suppliers', 'App\Http\Controllers\SupplierController@store');

    Route::get('/employees', 'App\Http\Controllers\EmployeeController@getAll');
    Route::get('/employees/search', 'App\Http\Controllers\EmployeeController@search');
    Route::get('/employees/{id}', 'App\Http\Controllers\EmployeeController@getById');
    Route::get('/employees/form/init', 'App\Http\Controllers\EmployeeController@getFormInitialData');
    Route::post('/employees', 'App\Http\Controllers\EmployeeController@store');

    Route::get('/departments', 'App\Http\Controllers\DepartmentController@getAll');
    Route::get('/departments/{id}', 'App\Http\Controllers\DepartmentController@getById');
    Route::post('/departments', 'App\Http\Controllers\DepartmentController@store');
    Route::put('/departments/{id}', 'App\Http\Controllers\DepartmentController@update');

    Route::get('/divisions', 'App\Http\Controllers\DivisionController@getAll');
    Route::get('/divisions/{id}', 'App\Http\Controllers\DivisionController@getById');
    Route::get('/divisions/form/init', 'App\Http\Controllers\DivisionController@getFormInitialData');
    Route::post('/divisions', 'App\Http\Controllers\DivisionController@store');
    Route::put('/divisions/{id}', 'App\Http\Controllers\DivisionController@update');

    Route::get('/rooms', 'App\Http\Controllers\RoomController@getAll');
    Route::get('/rooms/{id}', 'App\Http\Controllers\RoomController@getById');
    Route::post('/rooms', 'App\Http\Controllers\RoomController@store');
    Route::put('/rooms/{id}', 'App\Http\Controllers\RoomController@update');
    Route::delete('/rooms/{id}', 'App\Http\Controllers\RoomController@destroy');

    Route::get('/activities', 'App\Http\Controllers\ActivityController@getAll');
    Route::get('/activities/search', 'App\Http\Controllers\ActivityController@search');
    Route::get('/activities/{id}', 'App\Http\Controllers\ActivityController@getById');
    Route::post('/activities', 'App\Http\Controllers\ActivityController@store');
    Route::put('/activities/{id}', 'App\Http\Controllers\ActivityController@update');
    Route::delete('/activities/{id}', 'App\Http\Controllers\ActivityController@destroy');

    Route::get('/items', 'App\Http\Controllers\ItemController@getAll');
    Route::get('/items/search', 'App\Http\Controllers\ItemController@search');
    Route::get('/items/{id}', 'App\Http\Controllers\ItemController@getById');
    Route::post('/items', 'App\Http\Controllers\ItemController@store');
    Route::put('/items/{id}', 'App\Http\Controllers\ItemController@update');
    Route::delete('/items/{id}', 'App\Http\Controllers\ItemController@destroy');

    Route::get('/requisitions', 'App\Http\Controllers\RequisitionController@getAll');
    Route::get('/requisitions/{id}', 'App\Http\Controllers\RequisitionController@getById');
    Route::get('/requisitions/init/form', 'App\Http\Controllers\RequisitionController@getInitialFormData');
    Route::post('/requisitions', 'App\Http\Controllers\RequisitionController@store');
    Route::put('/requisitions/{id}', 'App\Http\Controllers\RequisitionController@update');
    Route::delete('/requisitions/{id}', 'App\Http\Controllers\RequisitionController@destroy');

    Route::get('/orders', 'App\Http\Controllers\OrderController@getAll');
    Route::get('/orders/{id}', 'App\Http\Controllers\OrderController@getById');
    Route::post('/orders', 'App\Http\Controllers\OrderController@store');
    Route::put('/orders/{id}', 'App\Http\Controllers\OrderController@update');
    Route::delete('/orders/{id}', 'App\Http\Controllers\OrderController@destroy');

    Route::get('/contents', 'App\Http\Controllers\WebDataController@getAll');
});

Route::get('/db-connection', function () {
    try {
        $dbconnect = \DB::connection()->getPDO();
        $dbname = \DB::connection()->getDatabaseName();

        echo "Connected successfully to the database. Database name is :".$dbname;
    } catch(Exception $e) {
        echo $e->getMessage();
    }
});
