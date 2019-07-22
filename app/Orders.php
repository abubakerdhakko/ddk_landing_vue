<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = "orders";
    protected $fillable = ['executive', 'developers', 'marketing', 'support', 'advisors'];
    //
}
