<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Repairation extends Model
{
    protected $table = 'repairations';
    // protected $primaryKey = 'id';
    // public $incrementing = false; // false = ไม่ใช้ options auto increment
    // public $timestamps = false; // false = ไม่ใช้ field updated_at และ created_at

    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id', 'id');
    }

    public function asset()
    {
        return $this->belongsTo(Asset::class, 'asset_id', 'id');
    }

    public function staff()
    {
        return $this->belongsTo(Employee::class, 'staff_id', 'id');
    }

    public function expenses()
    {
        return $this->hasMany(RepairationExpense::class, 'repair_id', 'id');
    }
}
