<?php

namespace App\Http\Livewire\Customer;

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
            'customer_document_type' => 'required',
            'customer_document_number' => 'required',
        ]);

        $customer = Ticket::create([
            'customer_document_type' => $this->customer_document_type,
            'customer_document_number' => $this->customer_document_number,
        ]);

        $this->resetInput();
        $this->emit('customerCreated', $customer);
        $this->emit('clientRegistered', $customer->customer_full_name);
    }


    public function resetInput()
    {
        $this->customer_document_type = null;
        $this->customer_document_number = null;
        $this->customer_full_name = null;
    }

    public function searchCustomer()
    {
        $this->validate([
            'customer_document_type' => 'required',
            'customer_document_number' => 'required',
        ]);

        $token = config('services.apisunat.token');
        $urldni = config('services.apisunat.urldni');
        $urlruc = config('services.apisunat.urlruc');

        if ($this->customer_document_type == 'DNI') {
            $response = Http::withHeaders([
                'Referer' => 'https://apis.net.pe/consulta-dni-api',
                'Authorization' => 'Bearer ' . $token,
            ])->get($urldni . $this->customer_document_number);
        } elseif ($this->customer_document_type == 'RUC') {
            $response = Http::withHeaders([
                'Referer' => 'http://apis.net.pe/api-ruc',
                'Authorization' => 'Bearer ' . $token,
            ])->get($urlruc . $this->customer_document_number);
        }

        $persona = $response->json();

        // Obtener los nombres de la persona
        $nombres = $persona['nombres'] ?? '';
        $apellidoPaterno = $persona['apellidoPaterno'] ?? '';
        $apellidoMaterno = $persona['apellidoMaterno'] ?? '';

        // Asignar los nombres a la variable $customer_full_name
        $this->customer_full_name = trim($nombres . ' ' . $apellidoPaterno . ' ' . $apellidoMaterno);
    }
}
