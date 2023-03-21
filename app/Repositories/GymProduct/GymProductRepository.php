<?php

namespace App\Repositories\GymProduct;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class GymProductRepository implements GymProductInterface
{
    public function storeProduct(array $data, $data_images)
    {
        try {
            if (isset($data['barcode_image']) && !empty($data['barcode_image'])) {
                $barcode_image = $data['barcode_image'];
                $data['barcode_image'] = $this->singleImageUpload($barcode_image);
                $barcode_image->storeAs("public/ProductBarcodeImages", $data['barcode_image']);
            }

            $slug = $data['name'];
            $check_slug = DB::table('products')->where('slug', $slug)->first();
            if ($check_slug) {
                $slug = uniqid() . '-' . $slug;
            }
            $data['slug'] = $slug;
            $data['seller_id'] = auth()->guard('mygym')->id();
            $data['created_at']  = date('Y-m-d H:i:s');
            $gym_product = DB::table('products')->insertGetId($data);

            if ($gym_product && $gym_product >= 0 && isset($data_images)) {
                $store_image = [];
                foreach ($data_images['product_image'] as $product_image) {
                    $image = $product_image;
                    $imageData['product_id']  = $gym_product;
                    $imageData['created_at']  = $data['created_at'];
                    $imageData['image']  = $this->singleImageUpload($product_image);
                    $image->storeAs("public/ProductImages", $imageData['image']);
                    array_push($store_image, $imageData);
                }
                return DB::table('product_images')->insert($store_image);
            } else {
                return back('msg', 'Properly try again, some error occur');
            }
        } catch (\Throwable $th) {
            return back()->with('msg', $th->getMessage());
        }
    }

    public function updateProduct(array $data, $data_images, $slug)
    {
        try {
            $product = Product::where('slug', $slug)->firstOrFail();
            if (isset($data['barcode_image']) && !empty($data['barcode_image'])) {
                $barcode_image = $data['barcode_image'];
                $data['barcode_image'] = $this->singleImageUpload($barcode_image);
                File::delete(public_path("storage/ProductBarcodeImages/" . $product->barcode_image));
                $barcode_image->storeAs("public/ProductBarcodeImages", $data['barcode_image']);
            }

            $data['updated_at']  = date('Y-m-d H:i:s');
// dd($data_images);
            if (!empty($data_images)) {
                // dd('image');
                $store_image = [];
                foreach ($data_images['product_image'] as $product_image) {
                    $image = $product_image;
                    $imageData['product_id']  = $product->id;
                    $imageData['created_at']  = $data['created_at'];
                    $imageData['image']  = $this->singleImageUpload($product_image);
                    $image->storeAs("public/ProductImages", $imageData['image']);
                    array_push($store_image, $imageData);
                }
                DB::table('product_images')->insert($store_image);
            }
            // dd($data);

            return $gym_product = $product->update($data);

        } catch (\Throwable $th) {
            return back()->with('msg', $th->getMessage());
        }
    }

    public function singleImageUpload($imageData)
    {
        return time() . rand(0000, 9999) . "." . $imageData->getClientOriginalExtension();
    }

    public function getProduct($slug)
    {
        return Product::where('slug', $slug)->with('product_images')->firstOrFail();
    }

    public function getGymWiseProduct()
    {
        return Product::where('seller_id', auth()->guard('mygym')->id())->with('product_images')
            // ->select('products.slug', 'products.name', 'products.brand', 'products.slug', 'products.slug', 'product_images.image')
            // ->join('product_images', 'products.id', 'product_images.product_id')
            ->get();
    }
}
