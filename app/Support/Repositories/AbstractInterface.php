<?php

namespace App\Support\Repositories;

/**
 * Interface RepositoryInterface
 * @package App\Support\Repositories
 */
interface AbstractInterface {
    /**
     * @return mixed
     */
    public function all();

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data);

    /**
     * @param array $data
     * @param $id
     * @return mixed
     */
    public function update(array $data, $id);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * @param $id
     * @return mixed
     */
    public function show($id);
}
