<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //untuk menggunakan soft deletes

class Blog extends Model
{

    use SoftDeletes;
    protected $dates = ['deleted_at'];


// whitelist dan blacklist pasti digunakan ketika mass assignment
    //whitelist (yang boleh diisikan)
    // protected $fillable = ['title','description'];

    //blacklist (yang tidak boleh diisikan)
    protected $guarded = [];

}