<?php
/**
 * UserRepository.php
 *
 * @author Breno Pereira <breno.pereira@alumiar.me>
 * @package E-Agenda
 */

namespace App\Domains\Users\Contracts\Users;

use Illuminate\Database\Eloquent\Collection;

/**
 * Interface UserRepository.
 *
 * User repository should implement full crud and some custom methods.
 */
interface UserRepository  {

    /**
     * @return Collection List users
     */
    public function all();

    /**
     * @param $paginate
     * @return mixed
     */
    public function paginate($paginate);

    /**
     * @param $id
     * @return mixed
     */
    public function show($id);

    /**
     * @param array $array
     * @return mixed
     */
    public function create(array $array);

    /**
     * @param array $array
     * @param $id
     * @return mixed
     */
    public function update(array $array, $id);
}
