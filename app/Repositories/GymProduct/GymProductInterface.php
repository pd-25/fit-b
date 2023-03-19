<?php
namespace App\Repositories\GymProduct;

interface GymProductInterface {
    public function storeProduct(array $data, $data_images);
    public function updateProduct(array $data, $data_images, $slug);
    public function getProduct($slug);
    public function getGymWiseProduct();
}
?>