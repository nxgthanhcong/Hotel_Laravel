<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thue extends Model
{
    use HasFactory;
    protected $table='Thue';
    protected $primaryKey = 'MaThue';
    protected $fillable = [
        'MaThue',
        'MaKHf',
        'MaPhongf',
        'NgayDen',
        'NgayDi',
        'ThanhTien'
    ];
   
}
