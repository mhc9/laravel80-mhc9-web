<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $table = 'assets';
    // protected $primaryKey = 'id';
    // public $incrementing = false; // false = ไม่ใช้ options auto increment
    // public $timestamps = false; // false = ไม่ใช้ field updated_at และ created_at

    public function category()
    {
        return $this->belongsTo(AssetCategory::class, 'asset_category_id', 'id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id', 'id');
    }

    public function budget()
    {
        return $this->belongsTo(Budget::class, 'budget_id', 'id');
    }

    public function obtaining()
    {
        return $this->belongsTo(ObtainingType::class, 'obtain_type_id', 'id');
    }

    public function currentOwner()
    {
        return $this->hasMany(AssetOwnership::class, 'asset_id', 'id')->where('status', 1);
    }
}
