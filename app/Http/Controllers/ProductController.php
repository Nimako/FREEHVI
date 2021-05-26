<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['category'] = DB::table('category')->get();
        
        //$data['cate_info'] = DB::table('category')->where(['slug'=>'food_beveragies'])->first();

        $data['list'] = Product::all();

        return view('product/product_list',$data);
    }


    public function productByCategory($slug){

      $data['category'] = DB::table('category')->get();
      $data['cate_info'] = DB::table('category')->where(['slug'=>$slug])->first();

      $data['list'] = Product::where(['category_id'=>$data['cate_info']->id])->get();

      return view('product/product_list',$data);
    }


    public function addToCart(Request $request){

        $Product = Product::whereRaw("SHA1(id) = '$request->product_id'")->first();
       
        Cart::add(array(
            'id'         => $request->product_id,
            'name'       => $Product->product_name,
            'price'      => $Product->amount_GH,
            'quantity'   => $request->quantity,
            'attributes' => array(
                'featured_image'=>$Product->featured_image,
            ),
            //'associatedModel' => $Product
        )); 

        return redirect()->back()->with('success', "$Product->product_name - GHS$Product->amount_GH has been added to Cart");
        

       /*
        $cartCollection = Cart::getContent();
        $cartCollection->count();
        $cartArray = $cartCollection->toJson();
        Cart::clear();
        echo $cartArray; 
        */

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
    */
    public function show($product_id)
    {
        $data['info'] = Product::whereRaw("SHA1(id) = '$product_id'")->first();

        if(!empty($data['info'])){
            return view('product/product_detail',$data);
        }else{
            //return redirect()->route('products.index');
            return redirect('products');
        }   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
