<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'brand_name', 'description', 'manufacture_date', 'expiry_date', 'price', 'currency', 'discount_price', 'referral_code_for_member', 'brand_name', 'quantiy_available', 'product_type', 'seller_id ', 'created_at', 'updated_at', 'slug', 'status'];

    public function product_images() {
        return $this->hasMany(ProductImage::class, 'product_id', 'id'); 

    }
}
