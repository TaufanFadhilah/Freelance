<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
  protected $table = 'finances';
  protected $fillable = ['ukm_id','cost','income','profit'];
  public $timestamps = false;
}
