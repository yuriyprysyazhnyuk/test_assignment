<?php

namespace Tests\Unit\ContactForm;

use App\Actions\ContactForm\CreateContactFormRequestAction;
use App\Models\ContactFormRequest;
use PHPUnit\Framework\Attributes\CoversClass;
use Tests\TestCase;

/**
 * Class CreateContactFormRequestTest
 * @package Tests\Unit\ContactForm
 */
#[CoversClass(\App\Actions\ContactForm\CreateContactFormRequestAction::class)]
class CreateContactFormRequestTest extends TestCase
{
    public function test_can_create_contact_form_request(): void
    {
        $data = ContactFormRequest::factory()->create()->toArray();
        $response = app(CreateContactFormRequestAction::class)->run($data);
        $this->assertModelExists($response);
    }
}
