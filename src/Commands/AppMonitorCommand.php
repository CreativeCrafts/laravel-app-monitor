<?php

namespace NeoNiche\AppMonitor\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use NeoNiche\AppMonitor\Models\DiskMonitorLog;

class AppMonitorCommand extends Command
{
    public $signature = 'app-monitor:log';

    public $description = 'Starts logging the metrics of the application disk usage';

    public function handle(): int
    {
        $this->comment('Logging metrics...');

        $diskName = config('app-monitor.disk_name');
        $fileCount = count(Storage::disk($diskName)->allFiles());

        DiskMonitorLog::create([
            'disk_name' => $diskName,
            'file_count' => $fileCount,
        ]);

        $this->comment('All done!');

        return self::SUCCESS;
    }
}
