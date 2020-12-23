<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiPhong extends Model
{
    use HasFactory;
    protected $table='LoaiPhong';
    protected $primaryKey = 'MaLoai';
    protected $fillable = [
        'MaLoai',
        'TenLoai',
        'Mota'
    ];
}
