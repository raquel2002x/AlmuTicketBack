<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Booking
 *
 * @property $id
 * @property $description
 * @property $date
 * @property $startTime
 * @property $endTime
 * @property $comment
 * @property $numPeople
 * @property $room
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Booking extends Model
{
    
    static $rules = [
		'description' => 'required',
		'date' => 'required',
		'startTime' => 'required',
		'endTime' => 'required',
		'numPeople' => 'required',
		'room' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['description','date','startTime','endTime','comment','numPeople','room'];



}
