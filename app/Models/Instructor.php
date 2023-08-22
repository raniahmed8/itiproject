<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Instructor extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        "name",
        "address",
        "salary",
        "hourRate",
        "department_id"
        ];

    public function department(){
       return $this->belongsTo(Department::class,'department_id'); // one
    }

    public function courses(){ //
        return $this->belongsToMany(course::class,'course_instructor','instructor_id','course_id','id','id');
    }

}
