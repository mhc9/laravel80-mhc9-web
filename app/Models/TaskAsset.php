<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskAsset extends Model
{
    protected $table = 'task_assets';
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
}
