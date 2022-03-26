<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = 
    [ 'name',
      'description',
      'image',
      'price_per_hour',
      'min_hour',
      'max_hour',
    ];
    
    public function orders(){
      return $this->hasMany(Order::class);
  }
  public function workers(){
    return $this->hasMany(Worker::class);
}
public function pakeges(): \Illuminate\Database\Eloquent\Relations\BelongsTo
{ 
    return $this->belongsTo(Pakeges::class);
}
}
