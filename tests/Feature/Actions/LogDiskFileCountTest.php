<?php

  use NeoNiche\AppMonitor\Actions\LogDiskFileCount;
  use NeoNiche\AppMonitor\Models\DiskMonitorLog;

  it('can log disk metrics to the database', function () {
      $metrics = [
          'disk_name' => 'local',
          'file_count' => 1,
      ];
      LogDiskFileCount::execute($metrics);
      expect(DiskMonitorLog::last()?->file_count)->toBe(1);
  });
