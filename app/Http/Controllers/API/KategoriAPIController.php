<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateKategoriAPIRequest;
use App\Http\Requests\API\UpdateKategoriAPIRequest;
use App\Models\Kategori;
use App\Repositories\KategoriRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\KategoriResource;
use Response;

/**
 * Class KategoriController
 * @package App\Http\Controllers\API
 */

class KategoriAPIController extends AppBaseController
{
    /** @var  KategoriRepository */
    private $kategoriRepository;

    public function __construct(KategoriRepository $kategoriRepo)
    {
        $this->kategoriRepository = $kategoriRepo;
    }

    /**
     * Display a listing of the Kategori.
     * GET|HEAD /kategoris
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $kategoris = $this->kategoriRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(KategoriResource::collection($kategoris), 'Kategoris retrieved successfully');
    }

    /**
     * Store a newly created Kategori in storage.
     * POST /kategoris
     *
     * @param CreateKategoriAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateKategoriAPIRequest $request)
    {
        $input = $request->all();

        $kategori = $this->kategoriRepository->create($input);

        return $this->sendResponse(new KategoriResource($kategori), 'Kategori saved successfully');
    }

    /**
     * Display the specified Kategori.
     * GET|HEAD /kategoris/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Kategori $kategori */
        $kategori = $this->kategoriRepository->find($id);

        if (empty($kategori)) {
            return $this->sendError('Kategori not found');
        }

        return $this->sendResponse(new KategoriResource($kategori), 'Kategori retrieved successfully');
    }

    /**
     * Update the specified Kategori in storage.
     * PUT/PATCH /kategoris/{id}
     *
     * @param int $id
     * @param UpdateKategoriAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKategoriAPIRequest $request)
    {
        $input = $request->all();

        /** @var Kategori $kategori */
        $kategori = $this->kategoriRepository->find($id);

        if (empty($kategori)) {
            return $this->sendError('Kategori not found');
        }

        $kategori = $this->kategoriRepository->update($input, $id);

        return $this->sendResponse(new KategoriResource($kategori), 'Kategori updated successfully');
    }

    /**
     * Remove the specified Kategori from storage.
     * DELETE /kategoris/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Kategori $kategori */
        $kategori = $this->kategoriRepository->find($id);

        if (empty($kategori)) {
            return $this->sendError('Kategori not found');
        }

        $kategori->delete();

        return $this->sendSuccess('Kategori deleted successfully');
    }
}
