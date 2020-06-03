<?php

namespace App\Units\Core\Providers;

use App\Support\Units\ServiceProvider;

/**
 * Class UnitServiceProvider
 * @package App\Units\Core\Providers
 */
class UnitServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $alias = "core";

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
    protected $providers = [];
}
