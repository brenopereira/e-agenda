<?php

namespace App\Units\Schedules\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class ScheduleServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [];

    /**
     * Register any authentication / authorization services.
     */
    public function boot()
    {
        $this->registerPolicies();
    }
}
