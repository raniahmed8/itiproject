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
    protected $fillable = ['name','duration','discribtion','top_id'];

        public function instructor(){ //
            return $this->belongsToMany(Instructor::class,'course_instructor','course_id','instructor_id','id','id');
        }
        public function topic(){ //
            return $this->belongsTo(Topic::class,'top_id');
        }
        public function students(){ //
            return $this->belongsToMany(student::class);
        }

}
