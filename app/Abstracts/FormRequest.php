<?php

namespace App\Abstracts;

use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest as BaseFormRequest;

/**
 * Class FormRequest
 * @package App\Abstracts
 */
abstract class FormRequest extends BaseFormRequest
{
    /**
     * @return array
     */
    abstract public function rules(): array;

    /**
     * @param Validator $validator
     * @return mixed
     */
    protected function failedValidation(Validator $validator)
    {
        $msg = $this->response($this->formatErrors($validator));

        throw new HttpResponseException($msg);
    }

    /**
     * Get the proper failed validation response for the request.
     *
     * @param array $errors
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function response(array $errors)
    {
        return new JsonResponse($errors, Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    /**
     * Format the errors from the given Validator instance.
     *
     * @param \Illuminate\Contracts\Validation\Validator $validator
     * @return array
     */
    protected function formatErrors(Validator $validator)
    {
        return $validator->getMessageBag()->toArray();
    }
}


