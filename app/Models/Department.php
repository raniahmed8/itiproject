<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name','mgr_id','hiringDare'];

    public function instructors(){
        return $this->hasMany(Instructor::class,'department_id',);
    }

    public function instructor(){

        return $this->hasOne(Instructor::class ,'id','mgr_id'); // one
    }

}
