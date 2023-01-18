<?php

namespace NeoNiche\AppMonitor\Models;

use Illuminate\Database\Eloquent\Model;

/**
 *@property string $disk_name
 *@property int $file_count
 */
class DiskMonitorLog extends Model
{
    protected $guarded = [];

    protected $casts = [
        'file_count' => 'integer',
    ];

    public static function last(): ?self
    {
        return self::latest()->first();
    }
}