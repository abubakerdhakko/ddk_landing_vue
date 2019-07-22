<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutList extends Model
{
    protected $table = 'about_list';
    protected $fillable = ['description'];
}
