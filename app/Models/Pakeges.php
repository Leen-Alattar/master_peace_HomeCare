<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pakeges extends Model
{
    use HasFactory;
    protected $fillable = 
    [ 'service_id',
    'num_of_workers',
    'num_of_hours',
    'num_of_visits',
    'total_price',
    ];
    public function services(){
        return $this->hasMany(Service::class);
    }
}
