<?php

namespace App\Http\Controllers\Landlord;

use App\ATV;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AtvController extends Controller
{

    public function atv_show()
    {
        $all_atvs = ATV::where('user_id',Auth::user()->id)->where('is_active',1)->paginate('10');
        return view('landlord.atvs.index', get_defined_vars()); 
    }

    public function create()
    {

        return view('landlord.atvs.create');
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

        // $i = 0;
        // $array = [];
        // foreach ($Data['hour'] as $hour) {
        //     $hours =  $hour;
        //     $price =  $Data['price'][$i];
        //     array_push($array, $hours, $price);
        //     $i++;
        // }
        // $json_encode = json_encode($array);
        // $json_decode = json_decode($json_encode);
        // dd($json_encode, $json_decode);
        $atv = new ATV;
        $atv->house_id = $request->house_id;
        $atv->user_id = Auth::user()->id;
        $atv->min_age = $request->min_age;
        $atv->name = $request->name;
        $atv->atv_experience = $request->atv_experience;
        $atv->total_passenger = $request->total_passenger;
        $atv->damage_deposit = $request->damage_deposit;
        $atv->description = $request->description;
        $atv->sub_description = $request->sub_description;
        $atv->main_image = $img_2;
        $atv->hour_1 = $request->hour_1;
        $atv->price_1 = $request->price_1;
        $atv->hour_2 = $request->hour_2;
        $atv->price_2 = $request->price_2;
        $atv->hour_3 = $request->hour_3;
        $atv->price_3 = $request->price_3;
        $atv->hour_4 = $request->hour_4;
        $atv->price_4 = $request->price_4;
        
        $atv->save();

        return redirect('/landlord/atv-list')->with('message','ATV\s Created Successfuly');
    }

    public function edit(Request $request, $id)
    {
        $atv = ATV::where('id', $id)->first();
        return view('landlord.atvs.edit', get_defined_vars());
    }


    public function update(Request $request, $id){
        if ($request->hasFile('main_image')) {
            $attechment = $request->file('main_image');
            $img_2 = time() . $attechment->getClientOriginalName();
            $attechment->move(public_path('images'), $img_2);

        }else{
            $atv = ATV::where('id',$id)->first();
            $img_2 = $atv->main_image;
        }
      
        ATV::where('id',$id)->update(array(
            'house_id' => $request->house_id,
            'min_age' => $request->min_age,
            'name' => $request->name,
            'atv_experience' => $request->atv_experience,
            'total_passenger' => $request->total_passenger,
            'damage_deposit' => $request->damage_deposit,
            'description' => $request->description,
            'sub_description' => $request->sub_description,
            'main_image' => $img_2,
            'hour_1' => $request->hour_1,
            'price_1' => $request->price_1,
            'hour_2' => $request->hour_2,
            'price_2' => $request->price_2,
            'hour_3' => $request->hour_3,
            'price_3' => $request->price_3,
            'hour_4' => $request->hour_4,
            'price_4' => $request->price_4,
        ));
        return redirect('/landlord/atv-list')->with('message','ATV\s Updated Successfuly');

    }

    public function destroy($id){
        ATV::where('id',$id)->update(array(
            'is_active' => 0
        ));
        return redirect('/landlord/atv-list')->with('message','ATV\s Removed Successfuly');

    }
}
