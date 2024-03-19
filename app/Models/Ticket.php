<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ticket
 *
 * @property $id
 * @property $name
 * @property $price
 * @property $quantity_available
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ticket extends Model
{
    
    static $rules = [
		'name' => 'required',
		'price' => 'required',
		'quantity_available' => 'required',
    
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','price','quantity_available' ,
     'customer_document_type', 'customer_document_number', 'customer_full_name'];

     public function Customer()
     {
         return $this->belongsTo(api_customer::class , 'customer_document_number', 'customer_full_name');
     }



}
