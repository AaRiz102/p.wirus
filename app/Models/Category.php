<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Relasi One-to-Many dengan Product
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
