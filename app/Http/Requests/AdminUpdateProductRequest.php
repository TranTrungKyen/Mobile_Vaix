<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminUpdateProductRequest extends FormRequest
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
    public function rules(Request $request): array
    {
        return [
            'name' => [
                'required',
                'max:50',
                Rule::unique('products')->ignore($request->id)],
            'sub_title' => 'required|max:50',
            'description' => 'required|max:1000',
            'sim_card' => 'required|max:50',
            'cpu' => 'required|max:100',
            'pin' => 'required|max:50',
            'screen_resolution' => 'required|max:50',
            'category_id' => 'required',
            'design_style' => 'required|max:50',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => __(VALIDATE_MESSAGE_URL['BACKEND'] . 'create_product_form.name.required'),
            'name.max' => __(VALIDATE_MESSAGE_URL['BACKEND'] . 'create_product_form.name.max'),
            'name.unique' => __(VALIDATE_MESSAGE_URL['BACKEND'] . 'create_product_form.name.unique'),
            'sub_title.required' => __(VALIDATE_MESSAGE_URL['BACKEND'] . 'create_product_form.sub_title.required'),
            'sub_title.max' => __(VALIDATE_MESSAGE_URL['BACKEND'] . 'create_product_form.sub_title.max'),
            'description.required' => __(VALIDATE_MESSAGE_URL['BACKEND'] . 'create_product_form.description.required'),
            'description.max' => __(VALIDATE_MESSAGE_URL['BACKEND'] . 'create_product_form.description.max'),
            'sim_card.required' => __(VALIDATE_MESSAGE_URL['BACKEND'] . 'create_product_form.sim_card.required'),
            'sim_card.max' => __(VALIDATE_MESSAGE_URL['BACKEND'] . 'create_product_form.sim_card.max'),
            'cpu.required' => __(VALIDATE_MESSAGE_URL['BACKEND'] . 'create_product_form.cpu.required'),
            'cpu.max' => __(VALIDATE_MESSAGE_URL['BACKEND'] . 'create_product_form.cpu.max'),
            'pin.required' => __(VALIDATE_MESSAGE_URL['BACKEND'] . 'create_product_form.pin.required'),
            'pin.max' => __(VALIDATE_MESSAGE_URL['BACKEND'] . 'create_product_form.pin.max'),
            'screen_resolution.required' => __(VALIDATE_MESSAGE_URL['BACKEND'] . 'create_product_form.screen_resolution.required'),
            'screen_resolution.max' => __(VALIDATE_MESSAGE_URL['BACKEND'] . 'create_product_form.screen_resolution.max'),
            'category_id.required' => __(VALIDATE_MESSAGE_URL['BACKEND'] . 'create_product_form.category_id.required'),
            'design_style.required' => __(VALIDATE_MESSAGE_URL['BACKEND'] . 'create_product_form.design_style.required'),
            'design_style.max' => __(VALIDATE_MESSAGE_URL['BACKEND'] . 'create_product_form.design_style.max'),
        ];
    }
}
