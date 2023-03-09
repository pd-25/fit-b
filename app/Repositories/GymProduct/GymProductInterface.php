<?php
namespace App\Repositories\GymProduct;

interface GymProductInterface {
    public function storeProduct(array $data, $data_images);
    public function getGymWiseProduct();
}
?>