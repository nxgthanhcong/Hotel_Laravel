<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phong extends Model
{
    use HasFactory;
    protected $table='Phong';
    protected $primaryKey = 'MaPhong';
    protected $fillable = [
        'MaPhong',
        'TenPhong',
        'Hinhanh',
        'Mota',
        'Songuoi',
        'LoaiPhong',
        'GiaPhong'
    ];
    public function loaiphong(){
        return $this->belongsTo('App\Models\LoaiPhong','LoaiPhong','MaLoai');
    }
}
