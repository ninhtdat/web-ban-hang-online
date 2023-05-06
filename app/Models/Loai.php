<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loai extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'l_ten', 'created_at', 'updated_at'];
}
