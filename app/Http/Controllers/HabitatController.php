<?php

namespace App\Http\Controllers;

use App\Models\Habitat;
use Illuminate\Http\Request;

/**
 * Class HabitatController
 * @package App\Http\Controllers
 */
class HabitatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habitats = Habitat::paginate();

        return view('habitat.index', compact('habitats'))
            ->with('i', (request()->input('page', 1) - 1) * $habitats->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $habitat = new Habitat();
        return view('habitat.create', compact('habitat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Habitat::$rules);

        $habitat = Habitat::create($request->all());

        return redirect()->route('habitats.index')
            ->with('success', 'Habitat created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $habitat = Habitat::find($id);

        return view('habitat.show', compact('habitat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $habitat = Habitat::find($id);

        return view('habitat.edit', compact('habitat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Habitat $habitat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Habitat $habitat)
    {
        request()->validate(Habitat::$rules);

        $habitat->update($request->all());

        return redirect()->route('habitats.index')
            ->with('success', 'Habitat updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $habitat = Habitat::find($id)->delete();

        return redirect()->route('habitats.index')
            ->with('success', 'Habitat deleted successfully');
    }
}
