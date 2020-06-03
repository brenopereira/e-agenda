<?php

namespace App\Support\Units;

use Illuminate\Support\ServiceProvider as LaravelProvider;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;

/**
 * Class ServiceProvider
 * @package Alumiar\Support\Units
 */
class ServiceProvider extends LaravelProvider
{

    /**
     * @var array
     */
    protected $providers = [];

    /**
     * @var
     */
    protected $alias;

    /**
     * @var array
     */
    protected $hasView = false;

    /**
     * @var bool
     */
    protected $hasTranslations = false;

    /**
     * Start Unit Service Provider
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register Providers
     */
    public function register()
    {
        $this->registerProviders(collect($this->providers));
    }

    /**
     * Register unity custom providers
     * @param Collection $providers
     */
    protected function registerProviders(Collection $providers)
    {
        $providers->each(function ($provider) {
            $this->app->register($provider);
        });
    }

    /**
     * Register unity translations
     * @throws \ReflectionException
     */
    protected function registerTranslations()
    {
        if ($this->hasTranslations) {
            $this->loadTranslationsFrom(
                $this->unitPath('Resources/Translations'),
                $this->alias
            );
        }
    }

    /**
     * Register unity views
     * @throws \ReflectionException
     */
    protected function registerViews(){
        if($this->hasView){
            $this->loadViewsFrom(
                $this->unitPath('Resources/Views'),
                $this->alias
            );
        }
    }

    /**
     * Detect the unit base path so resources can be proper loaded on child classes
     * @param null $append
     * @return bool|string
     * @throws \ReflectionException
     */
    protected function unitPath($append = null)
    {
        $reflection = new \ReflectionClass($this);
        $realPath = realpath(dirname($reflection->getFileName()).'/../');

        if (!$append) return $realPath;

        return $realPath . '/' . $append;
    }
}
