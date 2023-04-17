<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pmasuk extends Model
{
    use HasFactory;

    protected $table = "pmasuk";
    protected $primaryKey = "id";
    protected $fillable = ['mall', 'plat', 'gedung', 'lantai', 'harga', 'updated_at', 'created_at'];
}
