<?php

namespace App\Support\Domain;

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

/**
 * Class ModelFactory
 * @package Alumiar\Support\Domain
 */
abstract class ModelFactory {
    /**
     * @var mixed
     */
    protected $factory;

    /**
     * @var
     */
    protected $model;

    /**
     * @var
     */
    protected $faker;

    /**
     * ModelFactory constructor.
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function __construct()
    {
        $this->factory = app()->make(Factory::class);
        $this->factory = app()->make(Faker::class);
    }

    /**
     * @return mixed
     */
    public function define()
    {
        $this->factory->define($this->model, function(){
            return $this->fields();
        });
    }

    /**
     * @return mixed
     */
    abstract public function fields();
}
