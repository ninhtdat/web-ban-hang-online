<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'sp_ten', 'sp_giaGoc', 'sp_giaBan', 'sp_hinh', 'l_ma', 'created_at', 'updated_at'];
}
