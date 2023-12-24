<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherBook extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_id',
        'title',
        'total_page',
        'author',
        'published'
    ];


    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
