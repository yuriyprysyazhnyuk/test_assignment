<?php

namespace App\Http\Resources;

use App\Abstracts\JsonResource;
use Illuminate\Http\Request;

/**
 *
 * @OA\Schema(
 *    schema="ContactFormRequestResource",
 *    type="object",
 *    properties={
 *      @OA\Property(property="id", type="integer"),
 *      @OA\Property(property="first_name", type="string"),
 *      @OA\Property(property="last_name", type="string"),
 *      @OA\Property(property="phone", type="string"),
 *      @OA\Property(property="email", type="string"),
 *      @OA\Property(property="company", type="string"),
 *      @OA\Property(property="consent", type="string"),
 *      @OA\Property(property="message", type="string"),
 *      @OA\Property(property="created_at", type="string"),
 *    }
 *  )
 * /
 *
 * Class ContactFormRoleResource
 * @package App\Http\Resources
 */
class ContactFormRequestResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray(Request $request): array
    {
        return [
            'id'         => $this->id,
            'first_name' => $this->first_name,
            'last_name'  => $this->last_name,
            'phone'      => $this->phone,
            'email'      => $this->email,
            'company'    => $this->company,
            'role'       => $this->role,
            'consent'    => $this->consent,
            'message'    => $this->message,
            'created_at' => $this->created_at?->toDateTimeString(),
        ];
    }
}
