<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ChestDay;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index ()
    {
        $chest_day = ChestDay::get();
        return response()->json($chest_day);
    }
}