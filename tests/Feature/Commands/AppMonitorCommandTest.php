<?php

  use Illuminate\Support\Facades\Storage;
  use NeoNiche\AppMonitor\Models\DiskMonitorLog;

  beforeEach(function () {
      Storage::fake('local');
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
