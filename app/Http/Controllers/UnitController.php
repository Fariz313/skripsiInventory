<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

class UnitController extends Controller
{
    public function fetch()
    {
        $data = Unit::get();
        return json_encode($data);
    }
}
