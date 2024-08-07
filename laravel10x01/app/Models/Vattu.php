<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vattu extends Model
{
    use HasFactory;
    protected $table= 'vattu';
    public $timestamps = 'false';

    public $primarykey = 'MaVTu';
}
