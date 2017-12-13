<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UKM extends Model
{
    protected $table = 'UKM';
    protected $fillable = ['name','address','establish','category','photo'];

    public function Marketing()
    {
        return $this->hasOne('App\Marketing', 'ukm_id', 'id');
    }
    public function Finance()
    {
        return $this->hasOne('App\Finance', 'ukm_id', 'id');
    }
    public function Production()
    {
        return $this->hasOne('App\Production', 'ukm_id', 'id');
    }
    public function Value_Proporsition()
    {
        return $this->hasOne('App\Value_Proporsition', 'ukm_id', 'id');
    }
    public function Partner()
    {
        return $this->hasOne('App\Partner', 'ukm_id', 'id');
    }
}
