<?php

namespace App\Http\Livewire\Customer;

use App\Models\api_customer;
use App\Models\ApiCustomer;
use App\Models\Ticket;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Create extends Component
{
    public $customer_document_type, $customer_document_number, $customer_full_name;

    public function render()
    {
        return view('livewire.customer.create');
    }

    public function registerCustomer()
    {
        $this->validate([
            'price' => 'required|numeric',
            'quantity_available' => 'required|integer',
        ]);

        // Obtener los datos del cliente de la API
        $customerData = $this->searchCustomer();

        // Crear un nuevo cliente en la tabla api_customers
        $apiCustomer = api_customer::create([
            'customer_document_type' => $this->customer_document_type,
            'customer_document_number' => $this->customer_document_number,
            'customer_full_name' => $this->customer_full_name,
        ]);

        // Crear un nuevo ticket con los datos recibidos
        $ticket = Ticket::create([
            'price' => $this->price,
            'quantity_available' => $this->quantity_available,
            // Asignar los datos del cliente al ticket
            'customer_document_type' => $this->customer_document_type,
            'customer_document_number' => $this->customer_document_number,
            'customer_full_name' => $this->customer_full_name,
        ]);

        return redirect()->route('tickets.index')->with('success', 'Ticket created successfully.');
    }

    public function resetInput()
    {
        $this->customer_document_type = null;
        $this->customer_document_number = null;
        $this->customer_full_name = null;
    }

    public function searchCustomer()
    {

    
        $token = config('services.apisunat.token');
        $urldni = config('services.apisunat.urldni');
        $urlruc = config('services.apisunat.urlruc');
    
        if ($this->customer_document_type == 'DNI') {
            $response = Http::withHeaders([
                'Referer' => 'https://apis.net.pe/consulta-dni-api',
                'Authorization' => 'Bearer ' . $token,
            ])->get($urldni . $this->customer_document_number);
    
            $customerData = $response->json();

            if (isset($customerData['nombres'])) {
                $this->customer_full_name = trim($customerData['nombres'] . ' ' . $customerData['apellidoPaterno'] . ' ' . $customerData['apellidoMaterno']);

                // Almacena los datos del cliente consultado por la API
                api_customer::create([
                    'customer_document_type' => $this->customer_document_type,
                    'customer_document_number' => $this->customer_document_number,
                    'customer_full_name' => $this->customer_full_name,
                ]);
            } else {
                // Manejar el caso en el que 'customer_full_name' no está presente en la respuesta de la API
                $this->customer_full_name = 'Nombre no disponible';
            }
        } elseif ($this->customer_document_type == 'RUC') {
            // Procesamiento para RUC, si es necesario
        }
    }
}
