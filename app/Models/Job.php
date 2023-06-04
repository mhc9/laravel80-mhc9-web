<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';
    // protected $primaryKey = 'id';
    // public $incrementing = false; // false = ไม่ใช้ options auto increment
    // public $timestamps = false; // false = ไม่ใช้ field updated_at และ created_at

    public function type()
    {
        return $this->belongsTo(JobType::class, 'job_type_id', 'id');
    }

    public function group()
    {
        return $this->belongsTo(JobGroup::class, 'job_group_id', 'id');
    }
}
