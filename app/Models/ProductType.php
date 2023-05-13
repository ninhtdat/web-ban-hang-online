<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductType extends Model
{
    use HasFactory;
    protected $table = 'product_types';
    protected $fillable = [
        'name',
    ];
    
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

}
