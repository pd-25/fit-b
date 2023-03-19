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
        $data['my_products'] = $this->gym_products->getGymWiseProduct();
        return view('Mygym.GymProduct.index', $data);

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
       return redirect()->route('my-gym-products.index')->with('msg', 'Product Uploaded and sent for verification');


    }

    
    public function show($id)
    {
        
    }

   
    public function edit($slug)
    {
       $data['gym_product'] = $this->gym_products->getProduct($slug);
       return view('Mygym.GymProduct.edit', $data); 
    }

 
    public function update(Request $request, $id)
    {
        // updateProduct  
    }

  
    public function destroy($id)
    {
        
    }
}
