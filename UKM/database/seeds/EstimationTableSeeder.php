<?php

use Illuminate\Database\Seeder;
use App\Estimation;
class EstimationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('estimations')->delete();
      Estimation::create([
        'small' => 0,
        'medium' => 0,
        'high' => 0,
        'total' => 0
      ]);
    }
}
