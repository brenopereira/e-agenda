<?php

namespace App\Support\Domain;

use Illuminate\Database\Migrations\Migration as LaravelMigration;

/**
 * Class Migration
 * @package App\Support\Domain
 */
abstract class Migration extends LaravelMigration
{

    /**
     * @var
     */
    protected $schema;

    /**
     * Migration constructor.
     */
    public function __construct()
    {
        $this->schema = app('db')->connection()->getSchemaBuilder();
    }

    /**
     * Run the migrations.
     */
    abstract public function up();

    /**
     * Reverse the migrations.
     */
    abstract public function down();
}
