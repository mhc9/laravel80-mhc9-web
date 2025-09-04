<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionComment extends Model
{
    protected $table = 'q&a_comments';
    // protected $primaryKey = 'id';
    public $incrementing = false; // false = ไม่ใช้ options auto increment
    // public $timestamps = false; // false = ไม่ใช้ field updated_at และ created_at

    /** Set particular field mass assignable */
    // protected $fillable = ['status'];

    /** Set all the fields mass assignable */
    protected $guarded = [];

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id', 'id');
    }
}
