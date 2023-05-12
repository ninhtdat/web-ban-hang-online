<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;
    protected $table = 'product_types';
    protected $fillable = [
        // 'id',
        'name',
        // 'created_at',
        // 'updated_at',
    ];
    // protected $casts = [
    //     'id' => 'integer',
    //     'name' =>'string',
    //     'created_at' => 'datetime',
    //     'updated_at' => 'datetime',
    //     'deleted_at' => 'datetime',
    // ];  

}
