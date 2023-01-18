<?php

namespace NeoNiche\AppMonitor\Commands;

use Illuminate\Console\Command;

class AppMonitorCommand extends Command
{
    public $signature = 'laravel-app-monitor';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
