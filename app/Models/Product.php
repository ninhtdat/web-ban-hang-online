<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // protected $fillable = ['id', 'image', 'name', 'quantity', 'cost', 'price', 'description', 'created_at', 'updated_at' ];
    // protected $casts = [
    //     'id' => 'integer',
    //     'image' =>'string',
    //     'name' =>'string',
    //     'quantity' => 'integer',
    //     'cost' => 'integer',
    //     'price' => 'integer',
    //     'description' =>'string',
    //     'created_at' => 'datetime',
    //     'updated_at' => 'datetime',
    // ];
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        // 'id',
        'image',
        'name',
        'quantity',
        'cost',
        'price',
        'description',
        'product_type_id'
        // 'created_at',
        // 'updated_at'
    ];

    
}
