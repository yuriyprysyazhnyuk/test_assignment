<?php

namespace Tests\Unit\ContactForm;

use App\Actions\ContactForm\SearchContactFormRolesAction;
use App\Models\ContactFormRole;
use PHPUnit\Framework\Attributes\CoversClass;
use Tests\TestCase;

/**
 * Class SearchContactFormRolesTest
 * @package Tests\Unit\ContactForm
 */
#[CoversClass(\App\Actions\ContactForm\SearchContactFormRolesAction::class)]
class SearchContactFormRolesTest extends TestCase
{
    public function test_can_search_roles_by_name(): void
    {
        $contactFormRoles = ContactFormRole::factory(10)->create();
        $randomContactFormRole = $contactFormRoles->random();
        $response = app(SearchContactFormRolesAction::class)->run(['search' => $randomContactFormRole->name]);
        $this->assertEquals($response->first()->name, $randomContactFormRole->name);
    }
}
