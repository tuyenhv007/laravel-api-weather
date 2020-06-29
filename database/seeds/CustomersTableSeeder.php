<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new \App\Customer();
        $customer->first_name = 'Dung';
        $customer->last_name = 'Vu Thi';
        $customer->save();

        $customer = new \App\Customer();
        $customer->first_name = 'Bao';
        $customer->last_name = 'Trinh Van';
        $customer->save();
    }
}
