<?php

  it('can show disk file log entries', function () {
      $this->get('/app-monitor/disk-file-logs')
        ->assertOk()
        ->assertSee('Disk File Log Metrics');
  });
