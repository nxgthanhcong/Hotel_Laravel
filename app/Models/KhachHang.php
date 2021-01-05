<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Eloquent;

class KhachHang extends Model
{
    use HasFactory;
    protected $table='KhachHang';
    protected $primaryKey = 'MaKH';
    protected $fillable = [
        'MaKH',
        'TenKH',
        'DiaChi',
        'Sdt'
    ];
    
}
