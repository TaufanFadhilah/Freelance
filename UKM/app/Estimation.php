<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estimation extends Model
{
  protected $table = 'estimations';
  protected $fillable = ['small','medium','high','total'];
  public $timestamps = false;
}
