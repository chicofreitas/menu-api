<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * Get the post that owns the comment.
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
