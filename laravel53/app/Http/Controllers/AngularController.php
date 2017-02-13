<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AngularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index($id=null)
    {
        //
        if ($id==null) {
            $product=DB::table('medicin')->select("*")->get();
            return $product->toArray();
        }else{
            $product=DB::table('medicin')->select("*")->where('id',$id)->first();
            //echo '<pre>';print_r($product);die();
            return json_encode($product);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['product']=$request->product;
        $data['qty']=$request->qty;
        $data['price']=$request->price;
        $execution=DB::table('medicin')->insert($data);
        if (!empty($execution)) {
           return 'Data Saved';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $execution=DB::table('medicin')->where('id',$id)->delete();
        if (!empty($execution)) {
            return "successfully deleted";
        }
        
    }
}
