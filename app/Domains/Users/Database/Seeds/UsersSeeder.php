<?php

namespace App\Domains\Users\Database\Seeds;

use App\Domains\Users\Entities\User;
use Illuminate\Database\Seeder;

/**
 * Class UsersSeeders.
 */
class UsersSeeder extends Seeder
{
    /**
     * @todo improve users seeders
     */
    public function run()
    {
        factory(User::class)->times(1)->create();
    }
}
