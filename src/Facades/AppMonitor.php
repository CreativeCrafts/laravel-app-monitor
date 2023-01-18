<?php

namespace NeoNiche\AppMonitor\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \NeoNiche\AppMonitor\AppMonitor
 */
class AppMonitor extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \NeoNiche\AppMonitor\AppMonitor::class;
    }
}
