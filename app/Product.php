<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'sku',
      'name',
      'description',
      'type_id',
      'stock',
      'cost',
      'selling_price'
    ];
}