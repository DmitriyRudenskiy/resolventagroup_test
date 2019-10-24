<?php

namespace App\Http\Controllers;

use App\Exceptions\ExceptionErrorInterval;
use App\Models\Employee;
use App\Services\EmployeeScheduleServices;
use Laravel\Lumen\Routing\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EmployeeControllers extends Controller
{
    public function schedule(Request $request)
    {
        $userId = (int)$request->input('userId', 0);
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');

        $employee = Employee::findOrFail($userId);
        $start = Carbon::createFromFormat('Y-m-d', $startDate);
        $end = Carbon::createFromFormat('Y-m-d', $endDate);

        //
        if ($start->gt($end)) {
            throw new ExceptionErrorInterval();
        }

        $services = new EmployeeScheduleServices($employee, $start, $end);

        return $services->get();
    }
}
