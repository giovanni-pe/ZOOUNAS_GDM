<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Animal
 *
 * @property $id
 * @property $name
 * @property $species
 * @property $birth_date
 * @property $habitat_id
 * @property $created_at
 * @property $updated_at
 *
 * @property AnimalImage[] $animalImages
 * @property AnimalSponsor[] $animalSponsors
 * @property Habitat $habitat
 * @property SponsorMaintenance[] $sponsorMaintenances
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Animal extends Model
{
    
    static $rules = [
		'name' => 'required',
		'species' => 'required',
		'birth_date' => 'required',
		'habitat_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','species','foto','birth_date','habitat_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function animalImages()
    {
        return $this->hasMany('App\Models\AnimalImage', 'animal_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function animalSponsors()
    {
        return $this->hasMany('App\Models\AnimalSponsor', 'animal_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function habitat()
    {
        return $this->hasOne('App\Models\Habitat', 'id', 'habitat_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sponsorMaintenances()
    {
        return $this->hasMany('App\Models\SponsorMaintenance', 'animal_id', 'id');
    }
    

}
