<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BackDay extends Model
{
    use HasFactory;

    protected $table = 'back_day';
    protected $fillable = [
        'training_type',
        'groups',
        'reps',
        'weights',
    ];
}
