<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TokenSale extends Model
{
    protected $table = "token_sale";
    protected $fillable = ['title', 'amount', 'percentage'];
}
