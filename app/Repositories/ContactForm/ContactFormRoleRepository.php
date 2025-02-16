<?php

namespace App\Repositories\ContactForm;

use App\Abstracts\Model;
use App\Abstracts\Repository;
use App\Models\ContactFormRole;

/**
 * Class ContactFormRoleRepository
 * @package App\Repositories\ContactForm
 */
class ContactFormRoleRepository extends Repository
{
    /**
     * @return Model
     */
    public function model(): Model
    {
        return new ContactFormRole;
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function search(array $data)
    {
        $query = $this->model()->when(!empty($data['search']), function ($query) use ($data) {
            return $query->where('name', 'like', '%' . $data['search'] . '%');
        });

        return $this->paginateByRequest($query);
    }
}
