<?php
namespace App\Services;

use App\Models\Employee;
use Carbon\Carbon;

/**
 * Class EmployeeScheduleServices
 */
class EmployeeScheduleServices
{
    /**
     * @param Employee $employee
     * @param Carbon $start
     * @param Carbon $end
     */
    public function __construct($employee, Carbon $start, Carbon $end)
    {

    }

    /**
     * @return array
     */
    public function get()
    {
        return [];
    }
}
