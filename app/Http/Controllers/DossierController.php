<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDossierRequest;
use App\Http\Requests\UpdateDossierRequest;
use App\Repositories\DossierRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DossierController extends AppBaseController
{
    /** @var DossierRepository $dossierRepository*/
    private $dossierRepository;

    public function __construct(DossierRepository $dossierRepo)
    {
        $this->dossierRepository = $dossierRepo;
        $this->middleware('permission:dossier-list|dossier-create|dossier-edit|dossier-delete', ['only' => ['index','show']]);
        $this->middleware('permission:dossier-create', ['only' => ['create','store']]);
        $this->middleware('permission:dossier-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:dossier-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the Dossier.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $dossiers = $this->dossierRepository->all();

        return view('dossiers.index')
            ->with('dossiers', $dossiers);
    }

    /**
     * Show the form for creating a new Dossier.
     *
     * @return Response
     */
    public function create()
    {
        $installateurs = \DB::table('installateurs')->pluck('nom_societe', 'id');
        $districts = \DB::table('districts')->pluck('ur', 'id');

        return view('dossiers.create', compact('installateurs', 'districts'));
    }

    /**
     * Store a newly created Dossier in storage.
     *
     * @param CreateDossierRequest $request
     *
     * @return Response
     */
    public function store(CreateDossierRequest $request)
    {
        $input = $request->all();

        $dossier = $this->dossierRepository->create($input);

        Flash::success('Dossier saved successfully.');

        return redirect(route('dossiers.index'));
    }

    /**
     * Display the specified Dossier.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dossier = $this->dossierRepository->find($id);

        if (empty($dossier)) {
            Flash::error('Dossier not found');

            return redirect(route('dossiers.index'));
        }

        return view('dossiers.show')->with('dossier', $dossier);
    }

    /**
     * Show the form for editing the specified Dossier.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dossier = $this->dossierRepository->find($id);

        $installateurs = \DB::table('installateurs')->pluck('nom_societe', 'id');
        $districts = \DB::table('districts')->pluck('ur', 'id');

        if (empty($dossier)) {
            Flash::error('Dossier not found');

            return redirect(route('dossiers.index'));
        }

        return view('dossiers.edit', compact('dossier', 'installateurs', 'districts'));
    }

    /**
     * Update the specified Dossier in storage.
     *
     * @param int $id
     * @param UpdateDossierRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDossierRequest $request)
    {
        $dossier = $this->dossierRepository->find($id);

        if (empty($dossier)) {
            Flash::error('Dossier not found');

            return redirect(route('dossiers.index'));
        }

        $dossier = $this->dossierRepository->update($request->all(), $id);

        Flash::success('Dossier updated successfully.');

        return redirect(route('dossiers.index'));
    }

    /**
     * Remove the specified Dossier from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dossier = $this->dossierRepository->find($id);

        if (empty($dossier)) {
            Flash::error('Dossier not found');

            return redirect(route('dossiers.index'));
        }

        $this->dossierRepository->delete($id);

        Flash::success('Dossier deleted successfully.');

        return redirect(route('dossiers.index'));
    }
}
