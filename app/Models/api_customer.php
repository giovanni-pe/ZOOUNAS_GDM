<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class api_customer extends Model
{
    protected $fillable = ['customer_document_type', 'customer_document_number', 'customer_full_name'];

    public function tickets()
{
    return $this->hasmany(Ticket::class, 'id');
}

}
