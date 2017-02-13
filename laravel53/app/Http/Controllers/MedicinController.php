<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;
class MedicinController extends Controller
{
    //
 //    public function autocomplete(Request $request){
 //    	$name=$request->term;
 //    	 $data=DB::table('medicin')->select('*')
 //    	 						   ->where('product','LIKE', $name."%")
 //    	 						   //->take(10)
 //    	 						   ->get();

 //        foreach ($data as$key =>$query)
	// {
	//     $results[] =['id'=>$query,'product'=>$query->product];
	// }
	//  //echo '<pre>';print_r($results);die();
 //    	 //echo '<pre>';print_r($data->toArray());die();
 //    	return Response::json($results);
 //    //return $results;
 //        //echo json_encode($data->toArray());
 //    }


    public function autoComplete(Request $request) {
        $query =$request->get('term');
        $products=DB::table('medicin')->where('product','LIKE', $query."%")->distinct()->get(['product'])->toArray();
        $data=array();
        foreach ($products as $product) {
                $data[]=$product->product;//array('value'=>$product->product,'id'=>$product->id);
        }
        if(count($data))
             return $data;
        else
            return ['value'=>'No Result Found','id'=>''];
    } 


    public function get_all(Request $request){
    	$name= $request->get('term');
    	$data=DB::table('medicin')->select('*')
    	 						   ->where('product',$name)
    	 						   ->get()->toArray();
    	 //return Response::json($data);
        echo json_encode($data);
    }
}


