<?php

namespace App\Http\Controllers\Admin;

use App\Booking;
use App\House;
use App\Http\Controllers\Controller;
use App\User;
use App\ATV;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AtvController extends Controller
{

    public function atv_show(){
        $all_atvs = ATV::paginate('10');
        return view('admin.atvs.index',get_defined_vars());


    }

    public function create(){
        
        return view('admin.atvs.create');
    }


}