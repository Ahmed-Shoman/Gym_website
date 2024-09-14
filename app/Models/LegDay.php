<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LegDay extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'leg_day';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'training_type',
        'groups',
        'reps',
        'weights',
    ];
}