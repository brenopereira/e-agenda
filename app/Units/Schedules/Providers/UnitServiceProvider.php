<?php

namespace App\Units\Schedules\Providers;

use App\Support\Units\ServiceProvider;

/**
 * Class UnitServiceProvider
 * @package App\Units\Schedules\Providers
 */
class UnitServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $alias = "schedules";

    /**
     * @var string
     */
    protected $hasViews = true;

    /**
     * @var bool
     */
    protected $hasTranslations = true;

    /**
     * @var array
     */
    protected $providers = [
        ScheduleServiceProvider::class,
        RouteServiceProvider::class,
    ];
}
