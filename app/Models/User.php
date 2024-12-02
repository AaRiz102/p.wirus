<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    // Relasi ke Orders (Seorang pengguna bisa memiliki banyak pesanan)
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
