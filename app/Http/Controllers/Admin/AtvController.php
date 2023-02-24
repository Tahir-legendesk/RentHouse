<?php

namespace App\Http\Controllers\Admin;

use App\ATV;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AtvController extends Controller
{

    public function atv_show()
    {
        $all_atvs = ATV::paginate('10');
        return view('admin.atvs.index', get_defined_vars()); 
    }

    public function create()
    {

        return view('admin.atvs.create');
    }

    public function store(Request $request)
    {
        $Data = $request->all();
        // dd($request->all(), $request->all(), $request->all());
        if ($request->hasFile('main_image')) {
            $attechment = $request->file('main_image');
            $img_2 = time() . $attechment->getClientOriginalName();
            $attechment->move(public_path('images'), $img_2);
        }

        // dd(array_combine($request->hour, $request->price));

        $i = 0;
        $array = [];
        foreach ($Data['hour'] as $hour) {
            $hours =  $hour;
            $price =  $Data['price'][$i];
            array_push($array, $hours, $price);
            $i++;
        }
        // $json_encode = json_encode($array);
        // $json_decode = json_decode($json_encode);
        // dd($json_encode, $json_decode);
        $atv = new ATV;
        $atv->house_id = $request->house_id;
        $atv->min_age = $request->min_age;
        $atv->name = $request->name;
        $atv->atv_experience = $request->atv_experience;
        $atv->total_passenger = $request->total_passenger;
        $atv->damage_deposit = $request->damage_deposit;
        $atv->description = $request->description;
        $atv->sub_description = $request->sub_description;
        $atv->main_image = $img_2;
        $atv->price = json_encode($array);
        $atv->save();

        return redirect('/admin/atv-list')->with('message','ATV\s Created Successfuly');
    }

    public function edit(Request $request, $id)
    {
        $atv = ATV::where('id', $id)->first();
        return view('admin.atvs.edit', get_defined_vars());
    }
}
