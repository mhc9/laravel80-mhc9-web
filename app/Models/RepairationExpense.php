<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RepairationExpense extends Model
{
    protected $table = 'repairation_expenses';
    // protected $primaryKey = 'id';
    // public $incrementing = false; // false = ไม่ใช้ options auto increment
    // public $timestamps = false; // false = ไม่ใช้ field updated_at และ created_at

    public function repairation()
    {
        return $this->belongsTo(Repairation::class, 'repair_id', 'id');
    }
}
