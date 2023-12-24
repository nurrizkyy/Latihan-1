<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'nip',
        'name',
        'phone',
        'gender'
    ];

    public function teacher_books()
    {
        // (1) One to Many

        return $this->hasMany(TeacherBook::class);
     
    }

}
