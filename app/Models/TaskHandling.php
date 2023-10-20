<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskHandling extends Model
{
    protected $table = 'task_handlings';
    // protected $primaryKey = 'id';
    // public $incrementing = false; // false = ไม่ใช้ options auto increment
    // public $timestamps = false; // false = ไม่ใช้ field updated_at และ created_at

    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id', 'id');
    }

    // public function cause()
    // {
    //     return $this->belongsTo(Cause::class, 'cause_id', 'id');
    // }

    // public function type()
    // {
    //     return $this->belongsTo(HandleType::class, 'handle_type_id', 'id');
    // }

    public function handler()
    {
        return $this->belongsTo(Employee::class, 'handler_id', 'id');
    }
}
