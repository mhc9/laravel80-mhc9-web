<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    // protected $primaryKey = 'id';
    // public $incrementing = false; // false = ไม่ใช้ options auto increment
    // public $timestamps = false; // false = ไม่ใช้ field updated_at และ created_at

    public function type()
    {
        return $this->belongsTo(TaskType::class, 'task_type_id', 'id');
    }

    public function group()
    {
        return $this->belongsTo(TaskGroup::class, 'task_group_id', 'id');
    }
}
