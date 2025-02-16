<?php

namespace App\Actions\ContactForm;

use App\Abstracts\Action;
use App\Mail\NotifyNewContactFormRequest;
use App\Models\ContactFormRequest;
use App\Repositories\ContactForm\ContactFormRequestRepository;
use Illuminate\Support\Facades\Mail;

/**
 * Class CreateContactFormRequestAction
 * @package App\Actions\ContactForm
 */
class CreateContactFormRequestAction extends Action
{
    /**
     * @param ContactFormRequestRepository $contactFormRequestRepository
     */
    public function __construct(private readonly ContactFormRequestRepository $contactFormRequestRepository)
    {
    }

    /**
     * @param array $data
     * @return bool
     */
    public function run(array $data): ContactFormRequest
    {
        $data['consent'] = !!($data['consent'] ?? false);
        $contactFormRequest = $this->contactFormRequestRepository->create($data);
        //TODO ideally emails should be sent asynchronously in queues
        Mail::to($contactFormRequest->email)->send(new NotifyNewContactFormRequest($contactFormRequest));

        return $contactFormRequest;
    }
}
