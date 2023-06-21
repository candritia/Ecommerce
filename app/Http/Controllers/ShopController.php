<?php

namespace App\Http\Controllers;

use App\Models\layout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
class ShopController extends Controller
{
    function show(){
        $data['layout'] = layout::all();
        return view('shop',$data);
    }

}
