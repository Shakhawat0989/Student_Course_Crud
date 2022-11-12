<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCrud extends Model
{
    use HasFactory;
    protected $fillable = ['Student_name','Course_name','Fee'];
}
