<?php

namespace App\Repositories\GymProduct;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

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
            $data['created_at']  = date('Y-m-d');
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
            }
        } catch (\Throwable $th) {
            return back()->with('msg', 'Properly try again, some error occur!');
        }
    }

    public function singleImageUpload($imageData)
    {
        $content_db = time() . rand(0000, 9999) . "." . $imageData->getClientOriginalExtension();
        return $content_db;
    }

    public function getGymWiseProduct()
    {
        return DB::table('products')->where('seller_id', auth()->guard('mygym')->id())
            ->select('products.slug', 'products.name', 'products.brand', 'products.slug', 'products.slug', 'product_images.image')
            ->join('product_images', 'products.id', 'product_images.product_id')
            ->get();
    }
}
