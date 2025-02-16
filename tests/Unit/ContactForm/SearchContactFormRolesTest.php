<?php

namespace Tests\Unit\ContactForm;

use App\Actions\ContactForm\SearchContactFormRolesAction;
use App\Models\ContactFormRole;
use Tests\TestCase;

class SearchContactFormRolesTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_can_search_roles_by_name(): void
    {
        $contactFormRoles = ContactFormRole::factory(10)->create();
        $randomContactFormRole = $contactFormRoles->random();
        $response = app(SearchContactFormRolesAction::class)->run(['search' => $randomContactFormRole->name]);
        $this->assertEquals($response->first()->name, $randomContactFormRole->name);
    }
}
