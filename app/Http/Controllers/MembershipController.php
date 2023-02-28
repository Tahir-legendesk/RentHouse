<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function landlord_plans()
    {
        return view('landlord.plans');
    }

    public function billing($id)
    {
        return view('billing',compact('id'));
    }

}
