<?php

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::insert([
            'id' => 1,
            'name' => 'Работник №1'
        ]);

        Employee::insert([
            'id' => 2,
            'name' => 'Работник №2'
        ]);
    }
}

