<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() //Cho phép user thực hiện các sự kiện hay không
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
            'product_name' => 'min:5',
            'price' => 'greater_than:sale_price'
        ];
    }
}
