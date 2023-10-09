<?php

use Illuminate\Support\Facades\Storage;
use NeoNiche\AppMonitor\Models\DiskMonitorLog;

beforeEach(function () {
    Storage::fake('local');
    Storage::fake('s3');
});

it('can log file count for a disk', function () {
    Storage::disk('local')->put('file.txt', 'content');
    $this->artisan('app-monitor:log')
        ->expectsOutput('Logging metrics...')
        ->expectsOutput('All done!')
        ->assertExitCode(0);

    $this->assertCount(1, DiskMonitorLog::all());
    $logEntry = DiskMonitorLog::last();
    $this->assertEquals(1, $logEntry?->file_count);
});

it('can log file count for multiple disks', function () {
    config()->set('app-monitor.disk_names', ['local', 's3']);
    Storage::disk('s3')->put('file.txt', 'content');

    $this->artisan('app-monitor:log')->assertExitCode(0);

    $logEntries = DiskMonitorLog::all();
    $this->assertCount(2, $logEntries);
    $this->assertEquals('local', $logEntries[0]->disk_name);
    $this->assertEquals(0, $logEntries[0]->file_count);

    $this->assertEquals('s3', $logEntries[1]->disk_name);
    $this->assertEquals(1, $logEntries[1]->file_count);
});
