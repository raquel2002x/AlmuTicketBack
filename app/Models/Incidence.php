<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Incidence
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $description
 * @property $user_id
 * @property $category_id
 * @property $program_id
 * @property $location_id
 * @property $state_id
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Incidence extends Model
{
    
    static $rules = [
		'description' => 'required',
		'user_id' => 'required',
		'category_id' => 'required',
		'program_id' => 'required',
		'location_id' => 'required',
		'state_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['description','user_id','category_id','program_id','location_id','state_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
