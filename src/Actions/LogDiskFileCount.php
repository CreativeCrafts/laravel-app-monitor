<?php

namespace NeoNiche\AppMonitor\Actions;

use NeoNiche\AppMonitor\Models\DiskMonitorLog;

class LogDiskFileCount
{
    public static function execute(array $metrics): void
    {
        DiskMonitorLog::create($metrics);
    }
}
