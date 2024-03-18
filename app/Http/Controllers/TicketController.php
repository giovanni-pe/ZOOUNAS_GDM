<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

/**
 * Class TicketController
 * @package App\Http\Controllers
 */
class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::paginate();

        return view('ticket.index', compact('tickets'))
            ->with('i', (request()->input('page', 1) - 1) * $tickets->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ticket = new Ticket();
        return view('ticket.create', compact('ticket'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_full_name' => 'required',
            'customer_document_type' => 'required',
            'price' => 'required|numeric', // Validar que el precio sea obligatorio y numérico
            'quantity_available' => 'required|integer', // Validar que la cantidad disponible sea obligatoria y un entero
        ]);

        // Dividir el nombre completo en nombres, apellido paterno y apellido materno
        $names = explode(' ', $request->customer_full_name);
        $first_name = $names[0]; // Primer nombre
        $last_name1 = $names[1]; // Apellido paterno
        $last_name2 = $names[2] ?? ''; // Apellido materno, si existe

        // Crear un nuevo ticket con los datos recibidos
        $ticket = Ticket::create([
            'customer_full_name' => $request->customer_full_name,
            'first_name' => $first_name,
            'last_name1' => $last_name1,
            'last_name2' => $last_name2,
            'customer_document_type' => $request->customer_document_type,
            'price' => $request->price,
            'quantity_available' => $request->quantity_available,
        ]);

        return redirect()->route('tickets.index')->with('success', 'Ticket created successfully.');
    }
    
    

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ticket = Ticket::find($id);

        return view('ticket.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticket = Ticket::find($id);

        return view('ticket.edit', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ticket $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        request()->validate(Ticket::$rules);

        $ticket->update($request->all());

        return redirect()->route('tickets.index')
            ->with('success', 'Ticket updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ticket = Ticket::find($id)->delete();

        return redirect()->route('tickets.index')
            ->with('success', 'Ticket deleted successfully');
    }
}
