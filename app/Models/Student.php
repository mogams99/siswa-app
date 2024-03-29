<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'address',
        'phone_number',
        'class',
        'student_class_id',
    ];
    protected $dates = [
        'deleted_at',
    ];

    public function studentClass() {
        $result = $this->belongsTo(StudentClass::class, 'student_class_id', 'id');

        return $result;
    }
}
