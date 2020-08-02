<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meassuerments extends Model
{
    protected $fillable = [
'humudity',
'temprature',
'water_content',
 'created_at'
    ];
}
