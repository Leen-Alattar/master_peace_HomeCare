<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;
    protected $fillable = 
    [ 'name',
      'image',
      'age',
      'service_id',
      'phone',
      'nationality',
      'status',
    ];
    public function Services(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    { 
        return $this->belongsTo(Service::class);
    }
}
