<?php
         
namespace App\Http\Controllers;
          
use App\Data;
use Illuminate\Http\Request;

        
class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function search(Request $request)
    {
        $match_condition1 = ['app_number' => $request->app_number, 'id_card' => $request->idcard];
        $match_condition2 = ['app_number' => $request->app_number];
        $match_condition3 = ['com_reg' => $request->reg_comp];        
        $data = Data::where($match_condition1)->orwhere($match_condition2)->orwhere($match_condition3)->get();
        return response()->json(['data' => $data]);
            
        
    }
     
   
}