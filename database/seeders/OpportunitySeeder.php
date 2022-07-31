<?php

namespace Database\Seeders;

use App\Models\Opportunity;
use App\Models\OpportunityDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OpportunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Opportunity::factory()->count(30)->create()->each(function ($opportunity){
            $opportunity->detail()->save(OpportunityDetail:: factory(OpportunityDetail::class)->make());
        });
    }
}
