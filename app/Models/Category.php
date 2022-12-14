<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * Get the products for the company.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Get the category that owns the product.
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
