<?php

namespace App\Http\Requests;

use App\Inventory;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreInventoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('inventory_create');
    }

    public function rules()
    {
        return [
            'stocks' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'product_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
