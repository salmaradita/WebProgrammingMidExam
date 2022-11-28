<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;
    protected $table='publisher';
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'image',
    ];

    public function books(): HasMany
    {
        return $this->hasMany(Books::class, 'publisher_id', 'id');
    }
}
