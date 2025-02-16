<?php

namespace App\Http\Requests\ContactForm;

use App\Abstracts\FormRequest;

/**
 * Class CreateContactFormRequest
 * @package App\Http\Requests\ContactForm
 */
class CreateContactFormRequest extends FormRequest
{
    /**
     * @return string[]
     */
    public function rules(): array
    {
        return [
            'first_name' => 'max:255',
            'last_name'  => 'max:255',
            'phone'      => 'max:255',
            'email'      => 'required|string|email',
            'company'    => 'max:255',
            'message'    => 'required|string|max:10000',
            'consent'    => 'required|accepted',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
