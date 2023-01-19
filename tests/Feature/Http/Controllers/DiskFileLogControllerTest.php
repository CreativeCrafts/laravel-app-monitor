<?php

  use NeoNiche\AppMonitor\Models\DiskMonitorLog;

  it('can show disk file log entries', function () {
      $diskFileLog = DiskMonitorLog::factory()->create();
      $this->get('/app-monitor/disk-file-logs')
        ->assertOk()
        ->assertSee('Disk File Log Metrics')
        ->assertSee($diskFileLog->disk_name)
        ->assertSee($diskFileLog->file_count);
  });
