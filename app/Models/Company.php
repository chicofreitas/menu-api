<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'companies';

    /**
     * Get the comments for the blog post.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

     /**
     * Get the comments for the blog post.
     */
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
