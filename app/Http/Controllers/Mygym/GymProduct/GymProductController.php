<?php

namespace App\Http\Controllers\Mygym\GymProduct;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\GymProductRequest;
use App\Repositories\GymProduct\GymProductInterface;
use Illuminate\Http\Request;

class GymProductController extends Controller
{
    private $gym_products;

    public function __construct( GymProductInterface $gymProductInterface )
    {
        $this->gym_products = $gymProductInterface;
    }
    
    public function index()
    {
        return view('Mygym.GymProduct.index');

    }

   
    public function create()
    {
        return view('Mygym.GymProduct.create');
    }

    
    public function store(GymProductRequest $request)
    {
       $data = $request->only('name','brand_name', 'manufacture_date', 'expiry_date', 'quantiy_available', 'product_type', 'barcode_image', 'description', 'currency', 'price', 'discount_price', 'referral_code_for_member');
       $data_images = $request->only('product_image');
       $this->gym_products->storeProduct($data, $data_images);


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
        //
    }
}
