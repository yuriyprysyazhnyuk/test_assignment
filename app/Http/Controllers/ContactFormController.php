<?php

namespace App\Http\Controllers;

use App\Abstracts\Controller;
use App\Actions\ContactForm\SearchContactFormRolesAction;
use App\Http\Resources\ContactFormRoleResource;
use Illuminate\Http\Request;

/**
 * Class ContactFormController
 * @package App\Http\Controllers
 */
class ContactFormController extends Controller
{
    /**
     * //TODO OpenAPI annotations should be extracted to separate classes otherwise controllers will be too messy
     * @OA\Get(
     *     path="api/contact-forms/roles",
     *     summary="Get contact form roles",
     *     description="Get contact form roles",
     *     tags={"Contact form"},
     *     @OA\Parameter(
     *         name="search",
     *         in="path",
     *         required=false,
     *         description="",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *          response=200,
     *          description="Successful response",
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="data", type="array", @OA\Items(ref="#/components/schemas/ContactFormRoleResource")),
     *              @OA\Property(property="links", ref="#/components/schemas/Links"),
     *              @OA\Property(property="meta", ref="#/components/schemas/Pagination")
     *          )
     *      )
     * )
     *
     * @param Request $request
     * @param SearchContactFormRolesAction $action
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|\Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getRoles(Request $request, SearchContactFormRolesAction $action)
    {
        return $this->responsePaginatedCollection(
            $action->run(['search' => $request->get('search')]),
            ContactFormRoleResource::class
        );
    }
}
