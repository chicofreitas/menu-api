<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addon extends Model
{
    use HasFactory;

    /**
     * The producst that belong to the addon.
     */
    public function sections()
    {
        return $this->belongsToMany(Section::class);
    }
}
