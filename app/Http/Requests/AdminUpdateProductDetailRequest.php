<?php

namespace App\Http\Requests;

use App\Rules\UniqueColorStorage;
use Illuminate\Foundation\Http\FormRequest;

class AdminUpdateProductDetailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'color_id' => [
                'required',
                'array',
                new UniqueColorStorage,
            ],
            'color_id.*' => [
                'required',
            ],
            'storage_id.*' => [
                'required',
            ],
            'qty.*' => [
                'required',
                'numeric',
                'max:10000',
            ],
            'price.*' => [
                'required',
                'numeric',
                'max:999999999',
            ],
            'product_images.*' => 'image|mimes:jpg,jpeg,png|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'color_id.*.required' => __(VALIDATE_MESSAGE_URL['BACKEND'] . 'create_product_detail_form.color_id.required'),
            'storage_id.*.required' => __(VALIDATE_MESSAGE_URL['BACKEND'] . 'create_product_detail_form.storage_id.required'),
            'qty.*.required' => __(VALIDATE_MESSAGE_URL['BACKEND'] . 'create_product_detail_form.qty.required'),
            'qty.*.max' => __(VALIDATE_MESSAGE_URL['BACKEND'] . 'create_product_detail_form.qty.max'),
            'price.*.required' => __(VALIDATE_MESSAGE_URL['BACKEND'] . 'create_product_detail_form.price.required'),
            'price.*.max' => __(VALIDATE_MESSAGE_URL['BACKEND'] . 'create_product_detail_form.price.max'),
            'product_images.*.max' => __(VALIDATE_MESSAGE_URL['BACKEND'] . 'create_product_detail_form.product_images.max'),
            'product_images.*.mimes' => __(VALIDATE_MESSAGE_URL['BACKEND'] . 'create_product_detail_form.product_images.mimes'),
            'product_images.*.image' => __(VALIDATE_MESSAGE_URL['BACKEND'] . 'create_product_detail_form.product_images.image'),
        ];
    }
}
