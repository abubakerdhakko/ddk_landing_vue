<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $table = "contact_links";
    protected $fillable = ['facebook', 'instagram', 'linkedin', 'telegram', 'reddit', 'quora', 'stackoverflow'];
}
