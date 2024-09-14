<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoulderDay extends Model
{
    use HasFactory;

    protected $table = 'shoulder_day';

    protected $fillable = [
        'training_type',
        'groups',
        'reps',
        'weights',
    ];
}
