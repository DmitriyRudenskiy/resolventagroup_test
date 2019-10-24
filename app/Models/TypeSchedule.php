<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

interface TypeSchedule
{
    /**
     * Отпуск
     */
    public const VACATION = 1;

    /**
     * Праздники и выходные
     */
    public const HOLIDAYS = 2;

    /**
     * Рабочие часы
     */
    public const WORK_HOUR = 3;

    /**
     * Обед
     */
    public const LUNCH = 4;
}
