<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInstallateurRequest;
use App\Http\Requests\UpdateInstallateurRequest;
use App\Repositories\InstallateurRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class InstallateurController extends AppBaseController
{
    /** @var InstallateurRepository $installateurRepository*/
    private $installateurRepository;

    public function __construct(InstallateurRepository $installateurRepo)
    {
        $this->installateurRepository = $installateurRepo;

        $this->middleware('permission:installateur-list|installateur-create|installateur-edit|installateur-delete', ['only' => ['index','show']]);
        $this->middleware('permission:installateur-create', ['only' => ['create','store']]);
        $this->middleware('permission:installateur-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:installateur-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the Installateur.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $installateurs = $this->installateurRepository->all();

        return view('installateurs.index')
            ->with('installateurs', $installateurs);
    }

    /**
     * Show the form for creating a new Installateur.
     *
     * @return Response
     */
    public function create()
    {
        return view('installateurs.create');
    }

    /**
     * Store a newly created Installateur in storage.
     *
     * @param CreateInstallateurRequest $request
     *
     * @return Response
     */
    public function store(CreateInstallateurRequest $request)
    {
        $input = $request->all();

        $installateur = $this->installateurRepository->create($input);

        Flash::success('Installateur saved successfully.');

        return redirect(route('installateurs.index'));
    }

    /**
     * Display the specified Installateur.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $installateur = $this->installateurRepository->find($id);

        if (empty($installateur)) {
            Flash::error('Installateur not found');

            return redirect(route('installateurs.index'));
        }

        return view('installateurs.show')->with('installateur', $installateur);
    }

    /**
     * Show the form for editing the specified Installateur.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $installateur = $this->installateurRepository->find($id);

        if (empty($installateur)) {
            Flash::error('Installateur not found');

            return redirect(route('installateurs.index'));
        }

        return view('installateurs.edit')->with('installateur', $installateur);
    }

    /**
     * Update the specified Installateur in storage.
     *
     * @param int $id
     * @param UpdateInstallateurRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInstallateurRequest $request)
    {
        $installateur = $this->installateurRepository->find($id);

        if (empty($installateur)) {
            Flash::error('Installateur not found');

            return redirect(route('installateurs.index'));
        }

        $installateur = $this->installateurRepository->update($request->all(), $id);

        Flash::success('Installateur updated successfully.');

        return redirect(route('installateurs.index'));
    }

    /**
     * Remove the specified Installateur from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $installateur = $this->installateurRepository->find($id);

        if (empty($installateur)) {
            Flash::error('Installateur not found');

            return redirect(route('installateurs.index'));
        }

        $this->installateurRepository->delete($id);

        Flash::success('Installateur deleted successfully.');

        return redirect(route('installateurs.index'));
    }
}
