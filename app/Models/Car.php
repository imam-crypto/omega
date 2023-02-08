<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [

        'title', 'description', 'vehicle_id', 'merk_id', 'chassis_number', 'machine_number', 'bpkb_number',
        'bpkb_name', 'stnk_time', 'car_date', 'stock', 'price_buy', 'price_sell', 'car_status', 'stnk', 'ktp',
        'image', 'image_stnk', 'image_ktp'

    ];


    public function vehicle()
    {
        return $this->hasOne(Vehicle::class);
    }
}
