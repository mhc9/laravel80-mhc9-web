<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebPost extends Model
{
    protected $table = 'web_posts';
    // protected $primaryKey = '_id';
    // public $incrementing = false; // false = ไม่ใช้ options auto increment
    // public $timestamps = false; // false = ไม่ใช้ field updated_at และ created_at

    public function category()
    {
        return $this->belongsTo(WebPostCategory::class, 'category_id', 'id');
    }
}
