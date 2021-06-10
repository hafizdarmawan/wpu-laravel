<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    // yang boleh di isi data
    // protected $fillable = ['title','description'];
 
    // protected $dates = ["deleted_at"];
    //data yang tidak boleh di isi atau backlist 
    protected $guarded = ['id','updated_at',"deleted_at"];
}
