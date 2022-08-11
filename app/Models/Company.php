<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    /**
     * Get the comments for the blog post.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
