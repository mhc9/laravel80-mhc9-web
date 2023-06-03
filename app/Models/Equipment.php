<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table = 'equipments';
    // protected $primaryKey = 'id';
    // public $incrementing = false; // false = ไม่ใช้ options auto increment
    // public $timestamps = false; // false = ไม่ใช้ field updated_at และ created_at

    public function type()
    {
        return $this->belongsTo(EquipmentType::class, 'equipment_type_id', 'id');
    }

    public function group()
    {
        return $this->belongsTo(EquipmentGroup::class, 'equipment_group_id', 'id');
    }
}
