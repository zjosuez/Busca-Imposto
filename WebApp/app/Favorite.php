<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = ['productId', 'userId'];
    protected $table = 'favorite';
}