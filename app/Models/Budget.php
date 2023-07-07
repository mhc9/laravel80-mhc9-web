<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $table = 'budgets';
    // protected $primaryKey = 'id';
    // public $incrementing = false; // false = ไม่ใช้ options auto increment
    // public $timestamps = false; // false = ไม่ใช้ field updated_at และ created_at

    public function project()
    {
        return $this->belongsTo(BudgetProject::class, 'project_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo(BudgetType::class, 'type_id', 'id');
    }
}
