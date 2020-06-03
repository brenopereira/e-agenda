<?php
/**
 * UserRepository.php
 *
 * @author Breno Pereira <breno.pereira@alumiar.me>
 * @package IEL Amazonas
 */

namespace App\Domains\Users\Repositories\Users;

use App\Support\Repositories\AbstractRepository;
use App\Domains\Users\Entities\User;
use App\Domains\Users\Contracts\Users\UserRepository as UserInterface;

class UserRepository extends AbstractRepository implements UserInterface {

    /**
     * @var AbstractRepository
     */
    protected $model;

    /**
     * UserRepository constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->model = new AbstractRepository($user);
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * @param $paginate
     * @return mixed
     */
    public function paginate($paginate){
        return $this->model->getModel()->paginate($paginate);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return $this->model->show($id);
    }

    /**
     * @param array $array
     * @return mixed|void
     */
    public function create(array $array)
    {
        $array["password"] = bcrypt($array["password"]);

        return $this->model->create($array + ['slug' => mt_rand()]);
    }

    /**
     * @param array $array
     * @param $id
     * @return mixed
     */
    public function update(array $array, $id)
    {
        if(isset($array["password"])){
            $array["password"] = bcrypt($array["password"]);
        }

        return $this->model->update($array, $id);
    }
}
