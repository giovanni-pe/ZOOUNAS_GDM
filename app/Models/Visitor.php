<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Visitor
 *
 * @property $id
 * @property $name
 * @property $surname
 * @property $visit_date
 * @property $created_at
 * @property $updated_at
 *
 * @property Reservation[] $reservations
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Visitor extends Model
{
    
    static $rules = [
		'name' => 'required',
		'surname' => 'required',
		'visit_date' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','surname','visit_date'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservations()
    {
        return $this->hasMany('App\Models\Reservation', 'visitor_id', 'id');
    }
    

}
