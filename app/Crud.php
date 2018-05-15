<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{

    /**
     * @var array
     */
    protected $fillable = ['name', 'type'];
}
