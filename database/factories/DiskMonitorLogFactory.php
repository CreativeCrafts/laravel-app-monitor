<?php

namespace NeoNiche\AppMonitor\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use NeoNiche\AppMonitor\Models\DiskMonitorLog;

class DiskMonitorLogFactory extends Factory
{
    protected $model = DiskMonitorLog::class;

    public function definition(): array
    {
        return [
            'disk_name' => $this->faker->randomElement(['local', 's3']),
            'file_count' => $this->faker->randomNumber(),
        ];
    }
}
