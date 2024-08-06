<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khoa extends Model
{ // có thể tự tạo dữ liệu tĩnh hoặc lấy dữ liệu trong DB
    use HasFactory;
    protected $table = 'khoa';
    public $timestamps = false;
    protected $primaryKey = 'MaKH';
    public $incrementing = false;
    protected $keyType = 'string';
}
