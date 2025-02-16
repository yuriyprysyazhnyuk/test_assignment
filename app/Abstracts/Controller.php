<?php

namespace App\Abstracts;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

/**
 * @OA\Info(
 *    version="1.0.0",
 *    title="API documentation",
 * ),
 *
 * @OA\PathItem(path="/api")
 * @OA\Schema(
 *    schema="ResponseAcceptedObject",
 *    type="object",
 *    properties ={
 *      @OA\Property(property="message", type="string"),
 *    }
 *  ),
 * @OA\Schema(
 *    schema="Pagination",
 *    type="object",
 *    properties={
 *      @OA\Property(property="current_page", type="integer"),
 *      @OA\Property(property="from", type="integer"),
 *      @OA\Property(property="last_page", type="integer"),
 *      @OA\Property(property="path", type="string"),
 *      @OA\Property(property="per_page", type="integer"),
 *      @OA\Property(property="to", type="integer"),
 *      @OA\Property(property="total", type="integer"),
 *      @OA\Property(property="links", type="array", @OA\Items(ref="#/components/schemas/LinkDetails")),
 *    }
 *  ),
 * @OA\Schema(
 *     schema="LinkDetails",
 *     type="object",
 *     properties={
 *       @OA\Property(property="url", type="string"),
 *       @OA\Property(property="label", type="string"),
 *       @OA\Property(property="active", type="string")
 *     }
 *   ),
 * @OA\Schema(
 *    schema="Links",
 *    type="object",
 *    properties={
 *      @OA\Property(property="first", type="string"),
 *      @OA\Property(property="last", type="string"),
 *      @OA\Property(property="next", type="string"),
 *      @OA\Property(property="prev", type="string")
 *    }
 *  )
 *
 *
 * Class Controller
 * @package App\Abstracts
 */
abstract class Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function responseOk()
    {
        return response(['message' => 'Ok']);
    }

    /**
     * @param LengthAwarePaginator $data
     * @param string|null $resource
     * @return LengthAwarePaginator|AnonymousResourceCollection
     */
    public function responsePaginatedCollection(LengthAwarePaginator $data, ?string $resource = null)
    {
        //additional formating can be done to standardize api responses with and without Resource
        return $resource && is_subclass_of($resource, JsonResource::class) ?
            $resource::collection($data) : $data;
    }
}
