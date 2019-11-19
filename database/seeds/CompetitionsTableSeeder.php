<?php

use Illuminate\Database\Seeder;

/**
 * Class AccountsTableSeeder
 * @package Partymeister\Accounting\Database\Seeds
 */
class CompetitionsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call('partymeister:competitions:generate:competition Test-Competition');
    }
}
