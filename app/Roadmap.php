<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roadmap extends Model
{
    protected $table = "roadmap";
    protected $fillable = ['description', 'icon', 'date'];
}
