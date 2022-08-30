<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    /**
     * The addons that belong to the section.
     */
    public function addons()
    {
        return $this->belongsToMany(Addon::class)->as('info')->withPivot('price', 'is_countable')->withTimestamps();
    }

    /**
     * Get the post that owns the comment.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
