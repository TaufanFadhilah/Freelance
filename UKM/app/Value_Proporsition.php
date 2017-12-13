<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Value_Proporsition extends Model
{
  protected $table = 'value_proporsitions';
  protected $fillable = ['ukm_id','creativity','quality','design'];
  public $timestamps = false;
}
