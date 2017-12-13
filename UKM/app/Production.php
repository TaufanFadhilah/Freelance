<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
  protected $table = 'productions';
  protected $fillable = ['ukm_id','cost','labor_cost'];
  public $timestamps = false;
}
