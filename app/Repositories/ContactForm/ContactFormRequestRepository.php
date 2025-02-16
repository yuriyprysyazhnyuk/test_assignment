<?php

namespace App\Repositories\ContactForm;

use App\Abstracts\Model;
use App\Abstracts\Repository;
use App\Models\ContactFormRequest;
/**
 * Class ContactFormRequestRepository
 * @package App\Repositories\ContactForm
 */
class ContactFormRequestRepository extends Repository
{
    /**
     * @return Model
     */
    public function model(): Model
    {
        return new ContactFormRequest();
    }
}
