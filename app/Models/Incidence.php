<?php

namespace App\Models;

use App\Models\Area;
use App\Models\State;
use App\Models\Category;
use App\Models\Location;
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

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    

}
