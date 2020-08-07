<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meassuerments extends Model
{
    protected $fillable = [
'humudity',
'temprature',
'water_content',
'soil_moisture1',
'soil_moisture2',
 'created_at'
    ];
}
