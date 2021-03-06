<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DichVu extends Model
{
    use HasFactory;
    protected $table='DichVu';
    protected $primaryKey = 'MaDV';
    protected $fillable = [
        'MaDV',
        'TenDV',
        'MoTaDV',
        'GiaDV',
        'NoiDungDV'
    ];
}
