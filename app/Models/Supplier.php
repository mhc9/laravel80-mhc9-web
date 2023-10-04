<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';
    // protected $primaryKey = 'id';
    // public $incrementing = false; // false = ไม่ใช้ options auto increment
    // public $timestamps = false; // false = ไม่ใช้ field updated_at และ created_at

    public function changwat()
    {
        return $this->belongsTo(Changwat::class, 'changwat_id', 'id');
    }

    public function amphur()
    {
        return $this->belongsTo(Amphur::class, 'amphur_id', 'id');
    }

    public function tambon()
    {
        return $this->belongsTo(Tambon::class, 'tambon_id', 'id');
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class, 'bank_id', 'id');
    }
}
