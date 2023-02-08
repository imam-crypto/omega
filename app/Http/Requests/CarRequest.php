<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required',
            'vehicle_id' => 'required',
            'merk_id' => 'required',
            'chassis_number' => 'required',
            'machine_number' => 'required',
            'bpkb_number' => 'required',
            'bpkb_name' => 'required',
            'stnk_time' => 'required',
            'car_date' => 'required',
            'stock' => 'required|numeric',
            'price_buy' => 'required|numeric',
            'price_sell' => 'required',
            'car_status' => 'required',
            'image_stnk' => 'required|image',
            'image_ktp' => 'required|image',
            'image' => 'required|image',

        ];
    }
}
