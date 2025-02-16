<?php

namespace App\Abstracts;

/**
 * Class Repository
 * @package App\Abstracts
 */
abstract class Repository
{
    /**
     * @return mixed
     */
    abstract public function model();

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->model()->create($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function exists($id)
    {
        return $this->model()->where('id', $id)->exists();
    }

    /**
     * @param $query
     * @return mixed
     */
    public function paginateByRequest($query)
    {
        return $query->paginate();
    }
}
