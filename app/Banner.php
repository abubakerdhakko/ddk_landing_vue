<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = "main";
    protected $fillable = ['heading', 'description', 'progress_percent'];
    //
}
