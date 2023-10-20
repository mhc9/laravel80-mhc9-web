<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    // protected $primaryKey = 'id';
    // public $incrementing = false; // false = ไม่ใช้ options auto increment
    // public $timestamps = false; // false = ไม่ใช้ field updated_at และ created_at

    public function group()
    {
        return $this->belongsTo(TaskGroup::class, 'task_group_id', 'id');
    }

    public function reporter()
    {
        return $this->belongsTo(Employee::class, 'reporter_id', 'id');
    }

    public function assets()
    {
        return $this->hasMany(TaskAsset::class, 'task_id', 'id');
    }

    public function handlings()
    {
        return $this->hasMany(TaskHandling::class, 'task_id', 'id');
    }
}
