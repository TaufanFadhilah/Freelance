<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
  protected $table = 'partners';
  protected $fillable = ['ukm_id','suplayer_increment','availability','suplayer_min_order','suplayer_access','distributor_frequency',
  'distributor_send_cost','distributor_area','distributor_complaint','distributor_accuracy'];
  public $timestamps = false;
}
