<?php

namespace NeoNiche\AppMonitor\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use NeoNiche\AppMonitor\Actions\LogDiskFileCount;

class AppMonitorCommand extends Command
{
    public $signature = 'app-monitor:log';

    public $description = 'Starts logging the metrics of the application disk usage';

    public function handle(): int
    {
        $this->comment('Logging metrics...');

        collect(config('app-monitor.disk_names'))
            ->each(function (string $diskName) {
                $fileCount = count(Storage::disk($diskName)->allFiles());
                $metrics = [
                    'disk_name' => $diskName,
                    'file_count' => $fileCount,
                ];
                $this->info("Disk `{$diskName}` has `{$fileCount}` files");
                $this->info('Logging metrics for `${diskName}` disk...');
                LogDiskFileCount::execute($metrics);
            });
        $this->comment('All done!');

        return self::SUCCESS;
    }
}
