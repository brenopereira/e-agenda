<?php
/**
 * DomainServiceProvider.php
 *
 * @author Breno Pereira <breno.pereira@alumiar.me>
 * @package E-Agenda
 */

namespace App\Domains\Users\Providers;

use App\Support\Domain\ServiceProvider;
use App\Domains\Users\Database\Factories\UserFactory;
use App\Domains\Users\Database\Migrations\CreateUsersTable;
use App\Domains\Users\Database\Seeds\UsersSeeder;

/**
 * Class DomainServiceProvider.
 *
 * Register Users Domain Resources and Services
 */
class DomainServiceProvider extends ServiceProvider
{
    /**
     * @var string Domain "alias"
     */
    protected $alias = 'users';

    /**
     * @var bool Enable translations
     */
    protected $hasTranslations = false;

    /**
     * @var array Bind contracts to implementations
     */
    public $bindings = [];

    /**
     * @var array Migrations of this domains
     */
    protected $migrations = [
        CreateUsersTable::class,
    ];

    /**
     * @var array Factories of this domains
     */
    protected $factories = [
        UserFactory::class,
    ];

    /**
     * @var array Some Seeders
     */
    protected $seeders = [
        UsersSeeder::class
    ];
}
