<?php

namespace App\Console\Commands;

use App\Exceptions\ExceptionErrorInterval;
use Carbon\Carbon;
use Illuminate\Console\Command;

class DownloadHolidays extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'google:calendar {start?} {end?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Download holidays from google calendar';

    /**
     * Execute the console command.
     *
     * @param  \App\DripEmailer  $drip
     * @return mixed
     */
    public function handle()
    {
        // Валидация данных
        try {
            $start = Carbon::createFromFormat('Y-m-d', $this->argument('start'));
            $end = Carbon::createFromFormat('Y-m-d',  $this->argument('end'));

            if ($start->gt($end)) {
                throw new ExceptionErrorInterval();
            }

        } catch (\Exception $exception) {
            $start = Carbon::now();
            $end = Carbon::now()->addMonths(2);
        }

        var_dump($start, $end);
        exit();
    }
}
