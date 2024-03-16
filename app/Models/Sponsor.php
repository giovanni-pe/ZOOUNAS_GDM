<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sponsor
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @property AnimalSponsor[] $animalSponsors
 * @property SponsorMaintenance[] $sponsorMaintenances
 * @property SponsorVisitingHour[] $sponsorVisitingHours
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sponsor extends Model
{
    
    static $rules = [
		'name' => 'required',
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function animalSponsors()
    {
        return $this->hasMany('App\Models\AnimalSponsor', 'sponsor_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sponsorMaintenances()
    {
        return $this->hasMany('App\Models\SponsorMaintenance', 'sponsor_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sponsorVisitingHours()
    {
        return $this->hasMany('App\Models\SponsorVisitingHour', 'sponsor_id', 'id');
    }
    

}
