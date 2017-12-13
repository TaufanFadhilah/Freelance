<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marketing extends Model
{
  protected $table = 'marketings';
  protected $fillable = ['ukm_id','selling','price'];
  public $timestamps = false;
}
