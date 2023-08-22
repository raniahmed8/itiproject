<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class course extends Model
{
    use HasFactory;
    use SoftDeletes;
<<<<<<< HEAD

    protected $fillable = [
        "id",
        "name",
        "duration",
        "discribtion"
        ];
=======
    // protected $fillable = [
    //     "id",
    //     "name",
    //     "duration",
    //     "discribtion"
    //     ];
>>>>>>> 6c87283df0caa94a590ba33090a28048c30cf67c

    //     public function instructor(){ //
    //         return $this->belongsToMany(Instructor::class,'course_instructor','course_id','instructor_id','id','id');
    //     }
    protected $fillable = ['id','name','duration','discribtion'];
}
