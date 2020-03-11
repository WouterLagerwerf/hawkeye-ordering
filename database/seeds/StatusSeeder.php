<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $status = ['Done', 'Failed', 'Pending', 'Production'];

      foreach ($status as $stat) {
        Status::firstOrCreate([
          'name' => $stat,
        ]);
      }
    }
}
