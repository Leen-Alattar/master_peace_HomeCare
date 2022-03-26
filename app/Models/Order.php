<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable =
     ['service_id',
      'user_id',
      'num_of_hours',
      'num_of_workers',
      'time',
      'date',
      'notes',
      'location',
      'total_price',
     ];
     public function Users(): \Illuminate\Database\Eloquent\Relations\BelongsTo
     { 
         return $this->belongsTo(User::class);
     }
     public function Services(): \Illuminate\Database\Eloquent\Relations\BelongsTo
     { 
         return $this->belongsTo(Service::class);
     }

     
}
