<?php

namespace App\Actions\ContactForm;

use App\Abstracts\Action;
use App\Repositories\ContactForm\ContactFormRoleRepository;

/**
 * Class SearchContactFormRoleAction
 * @package App\Actions\ContactForm
 */
class SearchContactFormRolesAction extends Action
{
    /**
     * @param ContactFormRoleRepository $contactFormRoleRepository
     */
    public function __construct(private readonly ContactFormRoleRepository $contactFormRoleRepository)
    {
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function run(array $data)
    {
        return $this->contactFormRoleRepository->search($data);
    }
}
