<?php

namespace App\Support\Domain;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider as LaravelProvider;
use Migrator\MigratorTrait as HasMigrations;
use ReflectionClass;

/**
 * Class ServiceProvider
 * @package Alumiar\Support\Domain
 */
abstract class ServiceProvider extends LaravelProvider
{
    use HasMigrations;

    /**
     * @var
     */
    protected $alias;

    /**
     * @var
     */
    protected $subProviders;

    /**
     * @var array
     */
    protected $bindings = [];

    /**
     * @var array
     */
    protected $migrations = [];

    /**
     * @var array
     */
    protected $seeds = [];

    /**
     * @var array
     */
    protected $factories = [];

    /**
     * @var bool
     */
    protected $hasTranslations = false;

    /**
     *
     */
    public function boot()
    {
        if($this->hasTranslations){
            $this->registerTranslations();
        }
    }

    /**
     * Register Providers and Bindings
     */
    public function register()
    {
        $this->registerSubProviders(collect($this->subProviders));
        $this->registerBindings(collect($this->bindings));
        $this->registerMigrations(collect($this->migrations));
        $this->registerSeeds(collect($this->seeds));
        $this->registerFactories(collect($this->factories));
    }

    /**
     * @param Collection $subProviders
     */
    public function registerSubProviders(Collection $subProviders)
    {
        $subProviders->each(function ($provider) {
            $this->app->register($provider);
        });
    }

    /**
     * @param Collection $bindings
     */
    protected function registerBindings(Collection $bindings)
    {
        $bindings->each(function ($concretion, $abstraction) {
            $this->app->bind($abstraction, $concretion);
        });
    }

    /**
     * @param Collection $migrations
     */
    protected function registerMigrations(Collection $migrations)
    {
        $this->migrations($migrations->all());
    }

    /**
     * @param Collection $seeds
     */
    protected function registerSeeds(Collection $seeds)
    {
        $this->seeders($seeds->all());
    }

    /**
     * @param Collection $factories
     */
    protected function registerFactories(Collection $factories)
    {
        $factories->each(function ($factoryName) {
            (new $factoryName())->define();
        });
    }

    /**
     * @throws \ReflectionException
     */
    protected function registerTranslations()
    {
        $this->loadTranslationsFrom(
            $this->domainPath('Resources/Lang'),
            $this->alias
        );
    }

    /**
     * @param null $append
     * @return bool|string
     * @throws \ReflectionException
     */
    protected function domainPath($append = null)
    {
        $reflection = new ReflectionClass($this);
        $realPath = realpath(dirname($reflection->getFileName()) . '/../');
        if ($append) return $realPath;
        return $realPath . '/' . $append;
    }
}
