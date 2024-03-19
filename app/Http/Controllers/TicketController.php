<?php

namespace App\Http\Controllers;

use App\Models\api_customer;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::paginate();

        return view('ticket.index', compact('tickets' ,'id'))
            ->with('i', (request()->input('page', 1) - 1) * $tickets->perPage());
    }

    public function create()
    {
        $ticket = new Ticket();
        $clientes = api_customer::pluck('customer_full_name'); // 
        return view('ticket.create', compact('ticket','clientes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'price' => 'required|numeric',
            'quantity_available' => 'required|integer',
            'customer_id' => 'required|exists:api_customers,id', // Asegúrate de que el cliente exista en la tabla de clientes
        ]);
    
        $ticket = Ticket::create([
            'price' => $request->price,
            'quantity_available' => $request->quantity_available,
            'customer_id' => $request->customer_id, // Asigna el ID del cliente
        ]);
    
        return redirect()->route('tickets.index')->with('success', 'Ticket created successfully.');
    }
    

    public function show($id)
    {
        $ticket = Ticket::find($id);

        return view('ticket.show', compact('ticket'));
    }

    public function edit($id)
    {
        $ticket = Ticket::find($id);

        return view('ticket.edit', compact('ticket'));
    }

    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'price' => 'required|numeric',
            'quantity_available' => 'required|integer',

        ]);

        $ticket->update($request->all());

        return redirect()->route('tickets.index')->with('success', 'Ticket updated successfully');
    }

    public function destroy($id)
    {
        Ticket::find($id)->delete();

        return redirect()->route('tickets.index')->with('success', 'Ticket deleted successfully');
    }



    

}
