<?php

namespace App\Domains\Users\Database\Factories;

use App\Domains\Users\Entities\User;
use App\Support\Domain\ModelFactory;

/**
 * Class UserFactory.
 */
class UserFactory extends ModelFactory
{
    /**
     * @var UserFactory for the User Model
     */
    protected $model = User::class;

    /**
     * Define the User's Model Factory.
     */
    public function fields()
    {
        return [
            'name' => 'Breno Martins',
            'email' => 'brenomartinsxd@gmail.com',
            'password' => bcrypt(123123),
        ];
    }
}
