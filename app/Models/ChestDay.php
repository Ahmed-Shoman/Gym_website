<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChestDay extends Model
{
    protected $table = 'chest_day';
    protected $fillable =
    [
        'training_type',
        'groups',
        'reps',
        'weights',
    ];

}