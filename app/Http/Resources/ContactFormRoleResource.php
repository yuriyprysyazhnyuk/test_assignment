<?php

namespace App\Http\Resources;

use App\Abstracts\JsonResource;
use Illuminate\Http\Request;

/**
 *
 * @OA\Schema(
 *    schema="ContactFormRoleResource",
 *    type="object",
 *    properties={
 *      @OA\Property(property="id", type="integer"),
 *      @OA\Property(property="name", type="string")
 *    }
 *  )
 * /
 *
 * Class ContactFormRoleResource
 * @package App\Http\Resources
 */
class ContactFormRoleResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray(Request $request): array
    {
        return [
            'id'   => $this->id,
            'name' => $this->name,
        ];
    }
}
