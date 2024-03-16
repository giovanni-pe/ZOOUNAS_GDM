<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;

/**
 * Class SponsorController
 * @package App\Http\Controllers
 */
class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sponsors = Sponsor::paginate();

        return view('sponsor.index', compact('sponsors'))
            ->with('i', (request()->input('page', 1) - 1) * $sponsors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sponsor = new Sponsor();
        return view('sponsor.create', compact('sponsor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Sponsor::$rules);

        $sponsor = Sponsor::create($request->all());

        return redirect()->route('sponsors.index')
            ->with('success', 'Sponsor created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sponsor = Sponsor::find($id);

        return view('sponsor.show', compact('sponsor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sponsor = Sponsor::find($id);

        return view('sponsor.edit', compact('sponsor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Sponsor $sponsor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sponsor $sponsor)
    {
        request()->validate(Sponsor::$rules);

        $sponsor->update($request->all());

        return redirect()->route('sponsors.index')
            ->with('success', 'Sponsor updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $sponsor = Sponsor::find($id)->delete();

        return redirect()->route('sponsors.index')
            ->with('success', 'Sponsor deleted successfully');
    }
}
