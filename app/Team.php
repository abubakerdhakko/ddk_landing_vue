<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = "team";
    protected $fillable = ['name', 'title', 'image', 'link', 'category', 'team_order','description'];
}
