<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $fillable = [
        "id",
        "name",
        "duration",
        "discribtion"
        ];

        public function instructor(){ //
            return $this->belongsToMany(Instructor::class,'course_instructor','course_id','instructor_id','id','id');
        }
}
