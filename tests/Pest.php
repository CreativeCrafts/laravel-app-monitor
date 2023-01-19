<?php

  use Illuminate\Support\Facades\Route;
  use NeoNiche\AppMonitor\Tests\TestCase;

  uses(TestCase::class)
    ->beforeEach(function () {
        Route::appMonitor();
    })
    ->in(__DIR__);
