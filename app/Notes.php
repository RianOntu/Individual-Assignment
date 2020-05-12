<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
       protected $primaryKey='id';
    public $table='notes';
    public $timestamps=true;
}
