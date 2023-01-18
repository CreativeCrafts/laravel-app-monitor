<?php

  namespace NeoNiche\AppMonitor\Models;

  use Illuminate\Database\Eloquent\Model;

  class DiskMonitorLog extends Model
  {
      protected $guarded = [];

      public static function last(): ?self
      {
          return self::latest()->first();
      }
  }