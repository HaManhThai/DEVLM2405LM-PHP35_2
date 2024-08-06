<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sinhvien extends Model
{
    use HasFactory;
    protected $table = 'sinhvien';
    public $timestamps = false;
    protected $primaryKey = 'MaSV';
    public $incrementing = false;
    protected $keyType = 'string';
}
