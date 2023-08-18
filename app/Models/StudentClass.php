<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentClass extends Model
{
    use HasFactory, SoftDeletes;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'slug',
        'created_at',
        'updated_at'
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function students()
    {
        return $this->hasMany(Student::class, 'class_id', 'id');
    }
}
