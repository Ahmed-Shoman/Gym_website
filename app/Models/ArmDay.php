<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArmDay extends Model
{
    use HasFactory;

    // Specify the table name if it's not the plural of the model name
    protected $table = 'arm_day';

    // Specify the columns that are mass assignable
    protected $fillable = [
        'training_type',
        'groups',
        'reps',
        'weights',
    ];
}