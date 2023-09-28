<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assemble extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'chasis_parts',
        'engine_parts',
        'air_filter',
        'fuel_filter',
        'drive_belt',
        'fuel_injector',
        'fuel_pump',
        'tensioner_idelers',
        'oil_filter',
        'cv_joint',
        'wheel_bearings_and_hubs',
        'tranaxle_fluid',
        'brake_caliper',
        'brake_pads',
        'brake_shoe',
        'steering',
        'full_jdm_suspension_kit',
        'body_full_kit_price',
        'dashboard_and_electronics',
        
    ];
}
