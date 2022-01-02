<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemCategory;

class ItemCategoryController extends Controller
{
    public function fetch()
    {
        $data = ItemCategory::get();
        return json_encode($data);
    }
}
