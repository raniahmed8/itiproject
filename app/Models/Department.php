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

    public function instructor(){
        return $this->hasMany(Instructor::class,'id');
    }

    public function Minstructor(){

        return $this->hasOne(Instructor::class,'mgr_id'); // one
    }

}
