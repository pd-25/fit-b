<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class GymProductUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [
                'required', 'string', 'max:50'
            ],
            'brand_name' => [
                'required', 'string', 'max:50'
            ],
            'manufacture_date' => [
                'required',
                'date',
                'before_or_equal:expiry_date', 
            ],
            'expiry_date' => [
                'required',
                'date',
                'after_or_equal:manufacture_date',
            ],
            'quantiy_available' => [
                'required', 'numeric'
            ],

            'product_type' => [
                'required', 'string'
            ],

            'barcode_image' => [
                'nullable'
            ],

            'product_image' => [
                'nullable',
                // 'string',
                // 'mimes:jpg,png,jpeg,HEIF',
                'max:20000'
            ],

            'description' => [
                'required', 'string', 'min:20', 'max:3000'
            ],

            'currency' => [
                'required', 'string'
            ],

            'price' => [
                'required', 'numeric'
            ],

            'discount_price' => [
                'nullable', 'numeric'
            ],

            'referral_code_for_member' => [
                'nullable','string'
            ],
        ];
    }
}
