<?php

use Illuminate\Database\Seeder;
use App\Models\EmployeeSchedule;

class EmployeeScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Работник №1
        EmployeeSchedule::insert([
            'user_id' => 1,
            'type_id' => EmployeeSchedule::VACATION,
            'start' => '11.01',
            'end' => '25.01'
        ]);

        EmployeeSchedule::insert([
            'user_id' => 1,
            'type_id' => EmployeeSchedule::VACATION,
            'start' => '01.02',
            'end' => '15.02'
        ]);

        EmployeeSchedule::insert([
            'user_id' => 1,
            'type_id' => EmployeeSchedule::WORK_HOUR,
            'start' => '10:00',
            'end' => '19:00'
        ]);

        EmployeeSchedule::insert([
            'user_id' => 1,
            'type_id' => EmployeeSchedule::LUNCH,
            'start' => '01.02',
            'end' => '01.03'
        ]);

        // Работник №2
        EmployeeSchedule::insert([
            'user_id' => 2,
            'type_id' => EmployeeSchedule::VACATION,
            'start' => '11.01',
            'end' => '25.01'
        ]);

        EmployeeSchedule::insert([
            'user_id' => 2,
            'type_id' => EmployeeSchedule::WORK_HOUR,
            'start' => '09:00',
            'end' => '18:00'
        ]);

        EmployeeSchedule::insert([
            'user_id' => 2,
            'type_id' => EmployeeSchedule::LUNCH,
            'start' => '12:00',
            'end' => '13:00'
        ]);
    }
}
