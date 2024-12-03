<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $table = 'vendors'; // Nama tabel di database

    // Kolom-kolom yang dapat diisi (mass assignment)
    protected $fillable = [
        'store_name',
        'store_description',
        'address',
        'created_at',
        'updated_at',
    ];
}
