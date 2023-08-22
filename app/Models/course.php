<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class course extends Model
{
    use HasFactory;
    use SoftDeletes;
    // protected $fillable = [
    //     "id",
    //     "name",
    //     "duration",
    //     "discribtion"
    //     ];

    //     public function instructor(){ //
    //         return $this->belongsToMany(Instructor::class,'course_instructor','course_id','instructor_id','id','id');
    //     }
    protected $fillable = ['id','name','duration','discribtion'];
}
