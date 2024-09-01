<?php
namespace SystemHealth;

use Illuminate\Support\ServiceProvider;

class HealthServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        HealthSystem::check();
    }
}
