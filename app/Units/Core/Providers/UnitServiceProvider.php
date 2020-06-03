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
    protected $hasView = false;

    /**
     * @var bool
     */
    protected $hasTranslations = false;

    /**
     * @var array
     */
    protected $providers = [];
}
