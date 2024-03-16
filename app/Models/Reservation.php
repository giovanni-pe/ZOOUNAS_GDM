<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reservation
 *
 * @property $id
 * @property $visitor_id
 * @property $reservation_date
 * @property $created_at
 * @property $updated_at
 *
 * @property Payment[] $payments
 * @property Visitor $visitor
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reservation extends Model
{
    
    static $rules = [
		'visitor_id' => 'required',
		'reservation_date' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['visitor_id','reservation_date'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments()
    {
        return $this->hasMany('App\Models\Payment', 'reservation_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function visitor()
    {
        return $this->hasOne('App\Models\Visitor', 'id', 'visitor_id');
    }
    

}
