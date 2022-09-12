<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class APIProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('Products')->get();
        return json_encode($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('ok');
        $request->validate([
           'name'=>'required|string',
           'information'=>'required|string',
           'image'=>'required|string',
           'price'=>'required|numeric',
        ]);
        $name = $request->name;
        $information = $request->information;
        $image = $request->image;
        $price = $request->price;

        

        $add = DB::table('Products')->insert([
            'name'=> $name,
            'information'=> $information,
            'image'=> $image,
            'price'=> $price,
        ]);
        if($add ==true)
        {
            $products = DB::table('Products')->get();
            return json_encode($products);
        }
        else{
            return 'lỗi';
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
        $request->validate([
            'name'=>'required|string',
            'information'=>'required|string',
            'image'=>'required|string',
            'price'=>'required|numeric',
         ]);
         
        $name = $request->name;
        $information = $request->information;
        $image = $request->image;
        $price = $request->price;
        $update = DB::table('Products')->where('id',$id)->update([
            'name'=> $name,
            'information'=> $information,
            'image'=> $image,
            'price'=> $price,
        ]);
        if($update==true)
        {
            //return back();
            $products = DB::table('Products')->get();
            return json_encode($products);
        }
        else{
            return 'lỗi update';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = DB::table('Products')->where('id','=',$id)->delete();
        if($delete == true)
        {
            $max = DB::table('Products')->max('id') + 1; 
            $reset = DB::statement("ALTER TABLE Products AUTO_INCREMENT =  $max");
            if($reset == true)
            {
                $products = DB::table('Products')->get();
                return json_encode($products);
            }
        }
        else{
            return 'err delete';
        }
    }
}
