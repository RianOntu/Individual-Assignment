<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
   protected $primaryKey='id';
    public $table='notices';
    public $timestamps=false;

}
