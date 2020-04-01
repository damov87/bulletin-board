<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdvertisementRequest;
use App\Models\Advertisement;
use App\Repositories\AdvertisementRepository;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AdvertisementController extends Controller
{
    protected $repository;

    public function __construct(AdvertisementRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user = Auth::user();
        $advertisements = $this->repository->getAll();

        return view('ads.index', compact('advertisements', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $user = Auth::user();

        return view('ads.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AdvertisementRequest $request
     * @return Response
     */
    public function store(AdvertisementRequest $request)
    {
        $this->repository->store($request);

        return back()->with('post-ok', __('Advertisement successfully created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $advertisement = Advertisement::find($id);

        return view('ads.show', compact('advertisement'));
    }
}
