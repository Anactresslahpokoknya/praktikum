<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;
    protected $tabel = "buku";
    protected $primaryKey = "kode_buku";
    protected $keyType = "string";
    protected $guarded = [];
}
