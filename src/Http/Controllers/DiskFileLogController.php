<?php

namespace NeoNiche\AppMonitor\Http\Controllers;

  use NeoNiche\AppMonitor\Models\DiskMonitorLog;

  class DiskFileLogController
  {
      public function index()
      {
          $diskFileLogEntries = DiskMonitorLog::latest()->get();

          return view('app-monitor::diskFileLogEntries', compact('diskFileLogEntries'));
      }
  }
