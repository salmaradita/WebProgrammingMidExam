<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $table='books';
    protected $fillable = [
        'title',
        'author',
        'year',
        'synopsis',
        'image',
    ];

    public function BookCategory(): HasMany
    {
        return $this->hasMany(BookCategory::class, 'book_id', 'id');
    }

    public function Category()
    {
        return $this->hasMany(Category::class, 'book_id', 'id');
    }

    public function Publisher()
    {
        return $this->belongsTo(Publisher::class, 'publisher_id', 'id');
    }


}
