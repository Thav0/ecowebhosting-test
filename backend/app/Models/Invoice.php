<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'product_description',
        'price',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
