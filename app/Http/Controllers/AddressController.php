<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use App\Models\Divisions;
use App\Models\Districts;
use App\Models\Upazilas;

class AddressController extends Controller
{
    //

    public function view()
    {
         $divisions = Divisions::all();
        return view('address',compact('divisions'));
       
    }
   
    public function division()
    {
       
    }
    public function district()
    {
     
        $divisions_id =$request->input('divisions_id ');
      $districts = Districts::where('divisions_id', '=', $divisions_id)->get();
      return response()->json($districts);
    }

    public function upazila()
    {
       
        $districts_id =$request->input('districts_id ');
      $upazilas = Upazilas::where('districts_id', '=', $districts_id)->get();
      return response()->json($upazilas);
    }
}
